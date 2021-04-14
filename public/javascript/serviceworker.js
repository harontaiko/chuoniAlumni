const cacheName = "v1";

const cacheAssets = [
  "https://chuonialumni.tk/public/stylesheets/style.css",
  "https://chuonialumni.tk/public/javascript/chuoni.js",
  "https://chuonialumni.tk/public/images/images/sandpaper.jpg",
  "https://chuonialumni.tk/public/images/images/favicon.ico",
  "https://chuonialumni.tk/public/javascript/jquery.js",
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
