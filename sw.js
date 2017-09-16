// Load the sw-toolbox library.
 self.importScripts('sw-toolbox.js');
  
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
    console.log('ServiceWorker registration successful!');
  }).catch(function(err) {
    console.log('ServiceWorker registration failed: ', err);
  });
}


toolbox.precache([
    '/',
    '/about.html',
    '/about.css',
    '/about.js',
    
    '/css/materialize.css',
    '/css/materialize.min.css',
    
    '/js/materialize.js',
    '/js/materialize.min.js',
    
    
   
    
   
    
    '/audi.html',
    '/audi.css',
    '/audi.js',
    
    '/cellar.html',
    '/cellar.css',
    '/cellar.js',
    
    '/fnight.html',
    '/fnight.css',
    '/fnight.js',
    
    '/organi.css',
    '/organi.html',
    '/organi.js',
   
    '/sports.html',
    '/sports.css',
    '/sports.js',
    
    
    
    '/mytemplate.css',
    '/mytemplate.js',
    
    '/index-offline.html',
    '/index-offline.css',
    '/index-offline.js',
    
    
    '/rsc/veterans.png',
    '/rsc/13.png',
    '/rsc/12.png',
    '/rsc/14.png',
    '/rsc/15.png',
    '/rsc/16.png',
    '/rsc/17.png',
    '/images/yuna.jpg',
    '/images/office.png',
    '/images/yuna-2.png',
    '/fb.png',
    '/insta.jpg',
    '/youtube.png',
    '/pics',
    '/pics/akhil.jpg',
    '/pics/anjani.jpg',
    '/pics/arthi.jpg',
    '/pics/bhanu.jpg',
    '/pics/chaitanya.jpg',
    '/pics/chandana.jpg',
    '/pics/chiluka.jpg',
    '/pics/giri.jpg',
    '/pics/gvk.jpg',
    '/pics/harsha.jpg',
    '/pics/kaveri.jpg',
    '/pics/kunal.jpg',
    '/pics/lohith.jpg',
    
    
    
    '/offline.png',
    
    
]);






self.toolbox.router.get('/(.*)', function(request, values, options) {
   return toolbox.networkFirst(request, values, options).catch(function(error) {
        if (req.method === 'GET' && req.headers.get('accept').includes('text/html')) {
            return toolbox.cacheOnly(new Request('index-offline.html'), vals, opts);
        }
        throw error;
    });
});
                       
                       
self.toolbox.options.debug = true;

