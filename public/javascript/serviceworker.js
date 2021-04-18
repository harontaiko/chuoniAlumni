const cacheName = "v1";

const cacheAssets = [
  "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/stylesheets/css/style.css",
  "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/chuoni.min.js",
  "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/images/images/sandpaper.jpg",
  "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/images/icons/favicon.ico",
  "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/jquery.js",
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
