<!DOCTYPE html>
<html lang="en">
<head>
    <title>Примеры показа Панорам</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    {{--<style>--}}
        {{--body {--}}
            {{--background-color: #000000;--}}
            {{--margin: 0px;--}}
            {{--overflow: hidden;--}}
            {{--touch-action: none;--}}
        {{--}--}}

        {{--#info {--}}
            {{--position: absolute;--}}
            {{--top: 0px; width: 100%;--}}
            {{--color: #ffffff;--}}
            {{--padding: 5px;--}}
            {{--font-family:Monospace;--}}
            {{--font-size:13px;--}}
            {{--font-weight: bold;--}}
            {{--text-align:center;--}}
        {{--}--}}

        {{--a {--}}
            {{--color: #ffffff;--}}
        {{--}--}}
    {{--</style>--}}

    <style>
        html, body {
            margin: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #000;
        }

        a:link, a:visited{
            color: #bdc3c7;
        }

        .credit{
            position: absolute;
            text-align: center;
            width: 100%;
            padding: 20px 0;
            color: #fff;
        }

        #progress {
            width: 0;
            height: 5px;
            position: fixed;
            top: 0;
            background: #fff;
            -webkit-transition: opacity 0.5s ease;
            transition: opacity 0.5s ease;
        }

        #progress.finish {
            opacity: 0;
        }
    </style>
</head>
<body>

<div id="progress">
</div>


<script src="{{asset('js/three.js')}}"></script>
<script src="{{asset('js/files.js')}}"></script>
<script src="{{asset('js/panolens.js')}}"></script>

{{--<script>--}}

    {{--var camera, scene, renderer;--}}

    {{--var isUserInteracting = false,--}}
        {{--onMouseDownMouseX = 0, onMouseDownMouseY = 0,--}}
        {{--lon = 0, onMouseDownLon = 0,--}}
        {{--lat = 0, onMouseDownLat = 0,--}}
        {{--phi = 0, theta = 0;--}}

    {{--init();--}}
    {{--animate();--}}

    {{--function init() {--}}

        {{--var container, mesh;--}}

        {{--container = document.getElementById( 'container' );--}}

        {{--camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 1100 );--}}
        {{--camera.target = new THREE.Vector3( 0, 0, 0 );--}}

        {{--scene = new THREE.Scene();--}}

        {{--var geometry = new THREE.SphereBufferGeometry( 500, 60, 40 );--}}
        {{--// invert the geometry on the x-axis so that all of the faces point inward--}}
        {{--geometry.scale( - 1, 1, 1 );--}}

        {{--var material = new THREE.MeshBasicMaterial( {--}}
            {{--map: new THREE.TextureLoader().load( 'images/panorama/PANO_20181224_144747_1.jpg' )--}}
        {{--} );--}}

        {{--mesh = new THREE.Mesh( geometry, material );--}}

        {{--scene.add( mesh );--}}

        {{--renderer = new THREE.WebGLRenderer();--}}
        {{--renderer.setPixelRatio( window.devicePixelRatio );--}}
        {{--renderer.setSize( window.innerWidth, window.innerHeight );--}}
        {{--container.appendChild( renderer.domElement );--}}

        {{--document.addEventListener( 'mousedown', onPointerStart, false );--}}
        {{--document.addEventListener( 'mousemove', onPointerMove, false );--}}
        {{--document.addEventListener( 'mouseup', onPointerUp, false );--}}

        {{--document.addEventListener( 'wheel', onDocumentMouseWheel, false );--}}

        {{--document.addEventListener( 'touchstart', onPointerStart, false );--}}
        {{--document.addEventListener( 'touchmove', onPointerMove, false );--}}
        {{--document.addEventListener( 'touchend', onPointerUp, false );--}}

        {{--//--}}

        {{--document.addEventListener( 'dragover', function ( event ) {--}}

            {{--event.preventDefault();--}}
            {{--event.dataTransfer.dropEffect = 'copy';--}}

        {{--}, false );--}}

        {{--document.addEventListener( 'dragenter', function () {--}}

            {{--document.body.style.opacity = 0.5;--}}

        {{--}, false );--}}

        {{--document.addEventListener( 'dragleave', function () {--}}

            {{--document.body.style.opacity = 1;--}}

        {{--}, false );--}}

        {{--document.addEventListener( 'drop', function ( event ) {--}}

            {{--event.preventDefault();--}}

            {{--var reader = new FileReader();--}}
            {{--reader.addEventListener( 'load', function ( event ) {--}}

                {{--material.map.image.src = event.target.result;--}}
                {{--material.map.needsUpdate = true;--}}

            {{--}, false );--}}
            {{--reader.readAsDataURL( event.dataTransfer.files[ 0 ] );--}}

            {{--document.body.style.opacity = 1;--}}

        {{--}, false );--}}

        {{--//--}}

        {{--window.addEventListener( 'resize', onWindowResize, false );--}}

    {{--}--}}

    {{--function onWindowResize() {--}}

        {{--camera.aspect = window.innerWidth / window.innerHeight;--}}
        {{--camera.updateProjectionMatrix();--}}

        {{--renderer.setSize( window.innerWidth, window.innerHeight );--}}

    {{--}--}}

    {{--function onPointerStart( event ) {--}}

        {{--isUserInteracting = true;--}}

        {{--var clientX = event.clientX || event.touches[ 0 ].clientX;--}}
        {{--var clientY = event.clientY || event.touches[ 0 ].clientY;--}}

        {{--onMouseDownMouseX = clientX;--}}
        {{--onMouseDownMouseY = clientY;--}}

        {{--onMouseDownLon = lon;--}}
        {{--onMouseDownLat = lat;--}}

    {{--}--}}

    {{--function onPointerMove( event ) {--}}

        {{--if ( isUserInteracting === true ) {--}}

            {{--var clientX = event.clientX || event.touches[ 0 ].clientX;--}}
            {{--var clientY = event.clientY || event.touches[ 0 ].clientY;--}}

            {{--lon = ( onMouseDownMouseX - clientX ) * 0.1 + onMouseDownLon;--}}
            {{--lat = ( clientY - onMouseDownMouseY ) * 0.1 + onMouseDownLat;--}}

        {{--}--}}

    {{--}--}}

    {{--function onPointerUp() {--}}

        {{--isUserInteracting = false;--}}

    {{--}--}}

    {{--function onDocumentMouseWheel( event ) {--}}

        {{--var fov = camera.fov + event.deltaY * 0.05;--}}

        {{--camera.fov = THREE.Math.clamp( fov, 10, 75 );--}}

        {{--camera.updateProjectionMatrix();--}}

    {{--}--}}

    {{--function animate() {--}}

        {{--requestAnimationFrame( animate );--}}
        {{--update();--}}

    {{--}--}}

    {{--function update() {--}}



        {{--lat = Math.max( - 85, Math.min( 85, lat ) );--}}
        {{--phi = THREE.Math.degToRad( 90 - lat );--}}
        {{--theta = THREE.Math.degToRad( lon );--}}

        {{--camera.target.x = 500 * Math.sin( phi ) * Math.cos( theta );--}}
        {{--camera.target.y = 500 * Math.cos( phi );--}}
        {{--camera.target.z = 500 * Math.sin( phi ) * Math.sin( theta );--}}

        {{--camera.lookAt( camera.target );--}}

        {{--/*--}}
        {{--// distortion--}}
        {{--camera.position.copy( camera.target ).negate();--}}
        {{--*/--}}

        {{--renderer.render( scene, camera );--}}

    {{--}--}}

{{--</script>--}}
<script>

    var panorama, panorama2, panorama3, viewer, progress, progressElement;

    progressElement = document.getElementById( 'progress' );

    function onEnter ( event ) {

        progressElement.style.width = 0;
        progressElement.classList.remove( 'finish' );

    }

    function onProgress ( event ) {

        progress = event.progress.loaded / event.progress.total * 100;
        progressElement.style.width = progress + '%';
        if ( progress === 100 ) {
            progressElement.classList.add( 'finish' );
        }

    }

    // First panorama
    panorama = new PANOLENS.ImagePanorama( 'images/panorama/PANO_20181224_144747_1.jpg' );
    panorama.addEventListener( 'progress', onProgress );
    panorama.addEventListener( 'enter', onEnter );

    // Second panorama
    panorama2 = new PANOLENS.ImagePanorama( 'images/panorama/panorama.jpg' );
    panorama2.addEventListener( 'progress', onProgress );
    panorama2.addEventListener( 'enter', onEnter );

    // Third panorama
    panorama3 = new PANOLENS.ImagePanorama('images/panorama/panorama3.jpg')
    panorama3.addEventListener( 'progress', onProgress );
    panorama3.addEventListener( 'enter', onEnter );

    // Linking panoramas
    panorama.link( panorama2, new THREE.Vector3( -202.98, 358.27, -4414.74 ) );
    panorama2.link( panorama, new THREE.Vector3( 4954.53, 319.21, -556.71 ) );

    panorama.link( panorama3, new THREE.Vector3( 4954.53, 319.21, -556.71 ) );
    panorama3.link( panorama, new THREE.Vector3( -3399.16, 1015.42, -5000.00 ) );

    viewer = new PANOLENS.Viewer();
    viewer.add( panorama, panorama2, panorama3 );

</script>
</body>
</html>
