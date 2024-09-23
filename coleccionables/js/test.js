let mixers = [];
let clock = new THREE.Clock();
let controls;
let cameras = [];
let starGeo;
let stars;
let renderer;
let scenes = [];
const glbUrls = [
  "./model/1.glb",
  "./model/2.glb",
  "./model/3.glb",
  "./model/4.glb",
  "./model/5.glb",
  "./model/6.glb",
  "./model/7.glb",
  "./model/8.glb",
  "./model/9.glb",
  // ... Agregar las URLs de los otros 7 objetos GLB ...
];

function initRender(glbUrl, cajaId) {
  const scene = new THREE.Scene();
  scene.background = new THREE.Color(0x0a0a0a);
  scenes[cajaId - 1] = scene;

  // Luces
  const ambientLight = new THREE.AmbientLight(0xffffff, 0.3);
  scene.add(ambientLight);

  const directionalLight = new THREE.DirectionalLight(0xffffff, 0.6);
  scene.add(directionalLight);
  directionalLight.position.set(0, 0, -105);

  const directionalLight1 = new THREE.DirectionalLight(0xffffff, 3);
  scene.add(directionalLight1);
  directionalLight1.position.set(0, 2, 50);

  // Cámara
  const camera = new THREE.PerspectiveCamera(70, 1, 0.1, 1000);
  camera.position.set(0, 0, 3);
  cameras[cajaId - 1] = camera;

  // Modelo
  const loader = new THREE.GLTFLoader();
  loader.load(glbUrl, function (data) {
    const gltf = data;
    const object = gltf.scene;
    object.position.y = 0;
    object.position.x = 0;
    object.position.z = 0;
    scene.add(object);

    const mixer = new THREE.AnimationMixer(object);
    mixers[cajaId - 1] = mixer;

    // Animación (si existe)
    if (gltf.animations.length > 0) {
      const action = mixer.clipAction(gltf.animations[0]);
      action.play();
    }
  });

  // Render
  renderer = new THREE.WebGLRenderer({ antialias: true });
  renderer.shadowMap.enabled = true;

  const caja = document.getElementById(`caja${cajaId}`);
  const width = caja.offsetWidth;
  const height = caja.offsetHeight;
  renderer.setSize(width, height);
  caja.appendChild(renderer.domElement);

  // Controles
  controls = new THREE.OrbitControls(camera, renderer.domElement);
  controls.autoRotate = true;

  // Estrellas
  starGeo = new THREE.Geometry();
  for (let i = 0; i < 100; i++) {
    const star = new THREE.Vector3(
      Math.random() * 600 - 300,
      Math.random() * 600 - 300,
      Math.random() * 600 - 300
    );
    starGeo.vertices.push(star);
  }
  const sprite = new THREE.TextureLoader().load('./model/stars.png');
  const starMaterial = new THREE.PointsMaterial({
    color: 0xFFFFFF,
    size: 0.8,
    map: sprite
  });
  stars = new THREE.Points(starGeo, starMaterial);
  scene.add(stars);

  // Animación y renderizado
  function animate() {
    requestAnimationFrame(animate);
    for (let i = 0; i < mixers.length; i++) {
      if (mixers[i]) {
        mixers[i].update(clock.getDelta());
      }
    }
    controls.update();
    renderer.render(scene, cameras[cajaId - 1]);
  }

  animate();
}

function loadModel(glbUrl, cajaId) {
  return new Promise((resolve) => {
    initRender(glbUrl, cajaId);
    const timer = setInterval(() => {
      if (scenes[cajaId - 1]) {
        clearInterval(timer);
        resolve();
      }
    }, 100);
  });
}

async function loadAllModels() {
  const promises = [];
  for (let i = 0; i < glbUrls.length; i++) {
    const glbUrl = glbUrls[i];
    const cajaId = i + 1;
    mixers.push(null);
    cameras.push(null);
    scenes.push(null);
    await loadModel(glbUrl, cajaId);
  }

  // Iniciar la animación después de que todos los modelos estén cargados
  animateAll();
}

function animateAll() {
  function animate() {
    requestAnimationFrame(animate);
    for (let i = 0; i < mixers.length; i++) {
      if (mixers[i]) {
        mixers[i].update(clock.getDelta());
      }
    }
    controls.update();
    for (let i = 0; i < scenes.length; i++) {
      if (scenes[i] && cameras[i]) {
        renderer.render(scenes[i], cameras[i]);
      }
    }
  }

  animate();
}

window.addEventListener("load", loadAllModels);