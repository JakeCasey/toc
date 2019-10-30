function changeDashboardText(html) {
  var doc = document.querySelector('.content');
  console.log(doc);
}

// instantiate a loader
var loader = new THREE.SVGLoader();

// load a SVG resource
loader.load(
  // resource URL
  '',
  // called when the resource is loaded
  function(data) {
    var paths = data.paths;
    var group = new THREE.Group();

    for (var i = 0; i < paths.length; i++) {
      var path = paths[i];

      var material = new THREE.MeshBasicMaterial({
        color: path.color,
        side: THREE.DoubleSide,
        depthWrite: false,
      });

      var shapes = path.toShapes(true);

      for (var j = 0; j < shapes.length; j++) {
        var shape = shapes[j];
        var geometry = new THREE.ShapeBufferGeometry(shape);
        var mesh = new THREE.Mesh(geometry, material);
        group.add(mesh);
      }
    }

    scene.add(group);
  },
  // called when loading is in progresses
  function(xhr) {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');
  },
  // called when loading has errors
  function(error) {
    console.log('An error happened');
  },
);

changeDashboardText();

AFRAME.registerComponent('music-toggle', {
  init: function() {
    var play = this.el.sceneEl.querySelector('#play');
    var pause = this.el.sceneEl.querySelector('#pause');
    var dashboard = this.el.sceneEl.querySelector('#adash');

    this.el.addEventListener('click', function(evt) {
      console.log(evt);

      var target = evt.target.id;
      if (target == 'play') {
        //play
        console.log('here');
        dashboard.components.sound.playSound();
        play.setAttribute('visible', 'false');
        pause.setAttribute('visible', 'true');
      } else {
        //pause
        dashboard.components.sound.pauseSound();
        pause.setAttribute('visible', 'false');
        play.setAttribute('visible', 'true');
      }
    });
  },
});

AFRAME.registerComponent('button-interaction-handler', {
  init: function() {
    // var skyEl = this.el.sceneEl.querySelector('#background');
    // var text = this.el.sceneEl.querySelector('#text');
    // var test = this.el.sceneEl.querySelector('#test');
  },
});
