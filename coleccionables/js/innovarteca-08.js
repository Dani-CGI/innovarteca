let mixer = null;
let clock = new THREE.Clock();
let controls;
let camera;
let starGeo;
let stars;

init();
animate();
  
function init() {
	// Render size to match the browser
    width = window.innerWidth;
    height = window.innerHeight;
    
    // Create new scene
    scene = new THREE.Scene();
    scene.background = new THREE.Color(0x0a0a0a);

    //luz ambiente
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.3);
        scene.add(ambientLight);

        //luces direccionales
        const directionalLight = new THREE.DirectionalLight(0xffffff, 0.6);
        scene.add(directionalLight);
        directionalLight.position.set(0, 0, -105);

        const directionalLight1 = new THREE.DirectionalLight(0xffffff, 3);
        scene.add(directionalLight1);
        directionalLight1.position.set(0, 2, 50);
   
    // Camara
    camera = new THREE.PerspectiveCamera(70, window.innerWidth/window.innerHeight, 0.1, 1000);
    camera.position.set(0, 0, 3);


    // Modelo
    let loader = new THREE.GLTFLoader();
        loader.load("./model/innovarteca-49.glb", function (data) {
        gltf = data;
        let object = gltf.scene;
        object.position.y = 0;
        object.position.x = 0;
        object.position.z = 0;
        scene.add(object);
    });

    // Render
    renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.shadowMap.enabled = true;
    
    // Controles
    controls = new THREE.OrbitControls( camera, renderer.domElement );
    controls.autoRotate = true;
    renderer.setSize( width, height );
    renderer.gammaOutput = true;
    document.body.appendChild( renderer.domElement );

    //Estrellas
    starGeo = new THREE.Geometry();
    for(let i=0;i<100;i++){
        star = new THREE.Vector3(
            Math.random() * 600-300,
            Math.random() * 600-300,
            Math.random() * 600-300
        );
        starGeo.vertices.push(star);
    }
    let sprite = new THREE.TextureLoader().load('./model/stars.png');
    let starMaterial = new THREE.PointsMaterial({
        color: 0xFFFFFF,
        size: 0.8,
        map:sprite
    });
    stars = new THREE.Points(starGeo,starMaterial);
    scene.add(stars);
}
//Animacion de rotacion
function animate() {
    requestAnimationFrame( animate );
    if (mixer) mixer.update(clock.getDelta());
    controls.update();
    render();
}
// Lanzamiento
function render() {
    renderer.render( scene, camera );
}