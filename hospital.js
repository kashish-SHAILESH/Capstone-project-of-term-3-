function initMap(){
    var options = {
    zoom:8,
    center:{lat:20.5937,lng:78.9629}
    }
    
    var map = new google.maps.Map(document.getElementById('map'),options)
    var markers = [
    {
    coords: {lat: 23.5495, lng:58.3980 },
    content: '<h1>MUSCAT PRIVATE HOSPITAL</h1>'
    },
    {
    coords: {lat: 23.6043, lng:58.2478 },
    content: '<h1>STARCARE HOSPITAL OMAN</h1>'
    },
    
    {
    coords: {lat: 23.5880, lng: 58.4066},
    content: '<h1>AL RAFAH HOSPITAL OMAN</h1>'
    }
    ]
   

    for(var i=0; i<markers.length;i++){
    addMarker(markers[i])
    }
    
    function addMarker(props){
    var marker = new google.maps.Marker({
    position: props.coords,
    map: map,
    
    })
    
    if(props.content){
    var infowindow = new google.maps.InfoWindow({
    content:props.content
    })
    
    marker.addListener('click',function(){
    infowindow.open(map,marker)
    })
    }
    }
    }