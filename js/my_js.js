document.addEventListener('DOMContentLoaded', function () {
  try {
    // 檢查localStorage是否有標記
    var isFirstVisit = localStorage.getItem('isFirstVisit');
    if (isFirstVisit === null) {
      // 創建一個指向箭頭，將會指向可以切換黑白頁面的按鈕
      var arrowIcon = document.createElement('i');
      arrowIcon.className = 'fas fa-arrow-right arrow-icon';
      arrowIcon.id = 'arrow';
      arrowIcon.style.fontSize = '100px';
      arrowIcon.style.color = 'rgb(52 174 255)';
      arrowIcon.style.top = '30px';
      arrowIcon.style.position = 'absolute';
      arrowIcon.style.zIndex = '9999';
      document.body.appendChild(arrowIcon);
      // 依據視窗寬度追蹤 toggleBtn 或是 mobile-toggle-theme
      function trackElementPosition() {
        const tracker = document.getElementById("arrow");
        if (window.innerWidth <= 478) {
          const target = document.getElementById("mobile-toggle-theme");
          document.getElementById("nav-mobile").style.zIndex = 9999;
          const targetRect = target.getBoundingClientRect();
          tracker.style.left = (targetRect.left + 25) + 'px';
          tracker.style.transform = 'rotate(225deg)';
        }
        else {
          const target = document.getElementsByClassName("toggleBtn")[0];
          target.style.zIndex = 9999;
          const targetRect = target.getBoundingClientRect();
          tracker.style.left = (targetRect.left - 70) + 'px';
          tracker.style.transform = 'rotate(315deg)';
        }
        requestAnimationFrame(trackElementPosition);
      }
      trackElementPosition();
      // 彈跳出提醒 可以切換黑白頁面 的警示框
      Swal.fire({
        title: '切換黑白頁面<br>讓您舒服閱讀',
        showCancelButton: false,
        showConfirmButton: false,
        icon: 'info',
      }).then((result) => {
        document.getElementById("arrow").style.display = "none";
      })
    };
    // 在localStorage中設置標記，以便下次檢查
    localStorage.setItem('isFirstVisit', 'false');
  }
  catch (e) { }
  try {
    setTimeout(function () {
      document.querySelector('.wrapper').style.display = 'flex';
    }, 200);
  } catch (e) { }
  try {
    document.getElementsByClassName("post-time")[0].innerHTML = document.getElementsByClassName("post-time")[0].innerText.replace("00:00:00", "")
  } catch (e) { }
  try {
    document.getElementsByClassName("post-tags")[0].innerHTML = '<div><span></span><span class="tag"></span></div><div><a href="javascript:window.history.back();">back</a><span> . </span><a href="/">home</a></div>'
  } catch (e) { }
  try {
    document.querySelector('.link-item[title="Line"]').innerHTML = '<i class="iconfont fab fa-line"></i>'
    // 主頁的打字效果
    Type(["跌倒，是成長的保障，是學習的寶藏。", "Mistakes are stepping stones to success.", "Eat, Sleep, Code, Repeat."])
    // 主頁的頁面背景圖
    if (document.documentElement.clientWidth > 1000) {
      if (location.pathname == "/") { startSlideshow(5000); }
    }
  } catch (e) { }
  try {
    document.getElementsByClassName("copyright")[0].innerHTML = '<span>© Albert Wang | Powered by <a href="https://hexo.io" target="_blank">Hexo</a> & Theme by <a href="https://github.com/Siricee/hexo-theme-Chic" target="_blank">Chic</a></span>'
  } catch (e) { }
  try {
    document.getElementsByClassName("tocbot-toc-expand")[0].innerHTML = ''
  } catch (e) { }
  try {
    document.getElementsByClassName("post-wrap tags")[0].innerHTML = ''
  } catch (e) { }
  try {
    if (document.documentElement.clientWidth > 1000) {
      // 非主頁的漂浮點點
      var myElement = document.querySelector('#canvas-nest');
      if (!myElement && location.pathname != "/") {
        var scriptEl = document.createElement('script');
        scriptEl.src = '/js/canvas-nest.js';
        scriptEl.id = 'canvas-nest';
        document.body.appendChild(scriptEl);
      }
      // 主頁的頁面背景圖
      else {
        main = document.getElementsByClassName("main")[0]
        main.style.backgroundImage = "url('/image/white.png')";
        main.style.backgroundSize = "cover";
        main.style.backgroundPosition = "center";
        main.style.transition = "background-image 1s ease-in-out";
      }
    }
  } catch (e) { }
})

function startSlideshow(nextImageTime) {
  var images_white = ['/image/white.png', '/image/image1.jpg', '/image/image2.jpg', '/image/image3.jpg', '/image/image5.jpg', '/image/image6.jpg'];
  var images_dark = ['/image/white.png', '/image/image11.jpg', '/image/image13.jpg', '/image/image14.jpg', '/image/image15.jpg', '/image/image16.jpg'];
  var images = images_dark
  var currentIndex = 0;
  var main = document.getElementsByClassName("main")[0]
  var interval;

  function switchImage() {
    pagebody = document.getElementsByTagName('body')[0]
    if (pagebody.classList.contains('dark-theme')) {
      images = images_dark
    } else {
      images = images_white
    }

    var nextIndex = (currentIndex + 1) % images.length;
    var nextImage = 'url(' + images[nextIndex] + ')';
    main.style.backgroundImage = nextImage;
    currentIndex = nextIndex;
  }

  function start() {
    var initialImage = 'url(' + images[0] + ')';
    main.style.backgroundImage = initialImage;
    interval = setInterval(switchImage, nextImageTime);
  }

  function preloadImages(images, callback) {
    var loaded = 0;
    var toLoad = images.length;
    var imgs = [];

    function imageLoaded() {
      loaded++;
      if (loaded == toLoad) {
        callback();
      }
    }

    for (var i = 0; i < toLoad; i++) {
      var img = new Image();
      img.onload = imageLoaded;
      img.src = images[i];
      imgs.push(img);
    }
  }
  preloadImages(images_white.concat(images_dark), function () {
    document.getElementsByClassName('toggleBtn')[0].addEventListener('click', () => {
      clearInterval(interval)
      start()
    })
    start();
  });
}

function Type(str_list) {
  try {
    (win => {
      win.getScript = url => new Promise((resolve, reject) => {
        const script = document.createElement('script')
        script.src = url
        script.async = true
        script.onerror = reject
        script.onload = script.onreadystatechange = function () {
          const loadState = this.readyState
          if (loadState && loadState !== 'loaded' && loadState !== 'complete') return
          script.onload = script.onreadystatechange = null
          resolve()
        }
        document.head.appendChild(script)
      })
    })(window)

    document.getElementsByClassName("description")[0].innerHTML = "<div style='width:500px;' id='site-subtitle'><span id='subtitle'></span></div>"

    window.typedJSFn = {
      init: (str) => {
        window.typed = new Typed('#subtitle', Object.assign({
          strings: str,
          startDelay: 300,
          typeSpeed: 90,
          loop: true,
          backSpeed: 40,
        }, null))
      },
      run: (subtitleType) => {
        if (true) {
          if (typeof Typed === 'function') {
            subtitleType()
          } else {
            getScript('https://cdn.jsdelivr.net/npm/typed.js/lib/typed.min.js').then(subtitleType)
          }
        } else {
          subtitleType()
        }
      }
    }
    function subtitleType() {
      if (true) {
        typedJSFn.init(str_list)
      } else {
        document.getElementById("subtitle").innerHTML = '跌倒，是成長的保障，是學習的寶藏。'
      }
    }
    typedJSFn.run(subtitleType)
  } catch (e) { }
}
