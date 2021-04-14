const cacheName = "v1";

const cacheAssets = [
  "https://cdn.pixabay.com/photo/2015/11/07/11/22/smoke-1031060_960_720.jpg",
  "https://cdn.pixabay.com/photo/2019/12/09/19/39/landscape-4684217_960_720.jpg",
  "https://cdn.pixabay.com/photo/2015/08/13/20/06/flower-887443_960_720.jpg",
  "https://cdn.pixabay.com/photo/2013/11/28/10/02/camera-219958_960_720.jpg",
  "https://cdn.pixabay.com/photo/2017/08/30/07/52/money-2696219_960_720.jpg",
  "https://cdn.pixabay.com/photo/2013/07/13/01/20/martin-luther-king-155551_960_720.png",
  "https://cdn.pixabay.com/photo/2016/11/08/05/20/sunset-1807524_960_720.jpg",
  "https://cdn.pixabay.com/photo/2017/07/28/09/34/sand-2548132_960_720.jpg",
  "https://cdn.pixabay.com/photo/2015/07/27/18/32/siblings-862967_960_720.jpg",
  "https://cdn.pixabay.com/photo/2021/04/01/20/49/trees-6143244_960_720.jpg",
  "http://localhost/chuoniAlumni/public/stylesheets/style.css",
  "http://localhost/chuoniAlumni/public/javascript/chuoni.js",
  "http://localhost/chuoniAlumni/public/images/images/sandpaper.jpg",
  "http://localhost/chuoniAlumni/public/images/images/favicon.ico",
  "http://localhost/chuoniAlumni/public/javascript/jquery.js",
];

// Call Install Event
self.addEventListener("install", (e) => {
  console.log("Service running..");

  e.waitUntil(
    caches
      .open(cacheName)
      .then((cache) => {
        console.log("Service caching..");
        cache.addAll(cacheAssets);
      })
      .then(() => self.skipWaiting())
  );
});

// Call Activate Event
self.addEventListener("activate", (e) => {
  console.log("Service running...");
  // Remove unwanted caches
  e.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cache) => {
          if (cache !== cacheName) {
            console.log("Service clearing..");
            return caches.delete(cache);
          }
        })
      );
    })
  );
});

// Call Fetch Event
self.addEventListener("fetch", (e) => {
  console.log("Service pull req..");
  e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
});
