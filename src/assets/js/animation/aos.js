AOS.init({
  offset: 100,
  // duration: 1000,
  once: true,
});

//fadeinLeftを使用する時に一部バグがあります。下記をfadeinLeftの親要素に当てると治ります。
// overflow-x: hidden;
// overflow-y: hidden;
