@extends('public.app')
@section('contents')

<div style="margin-top: 5vh" class="custom-container">
    <div class="row">
        <div class="col-12">
            <div class="mx-auto " >
                <div class="card text-center bg-primary m-3" >

                    <div class="card-header text-secondary border-radius">
                        Panorama Tour
                      </div>
                    <div class="card-body"  >

                        <div id="panorama" style="max-width: 1280px; height:75vh ;   border-radius: 10px;




                       " class="m-auto">
                        </div>
                        <script>
                            pannellum.viewer('panorama', {

                                "default": {
                                    "firstScene": "circle",
                                    "sceneFadeDuration": 1000,
                                    "autoLoad": true
                                    

                                },


                                "scenes": {
                                    "circle": {
                                        "title": " Building 509",
                                        "hfov": 110,
                                        "pitch": -3,
                                        "yaw": 117,
                                        "type": "equirectangular",
                                        "panorama": "imgs/panorama/pano5.jpg",
                                        "hotSpots": [
                                            {
                                                "pitch": -2.1,
                                                "yaw": 132.9,
                                                "type": "scene",
                                                "text": "Spring House or Dairy",
                                                "sceneId": "gate"
                                            }
                                        ]
                                    },

                                    "gate": {
                                        "title": "Compund",
                                        "hfov": 110,
                                        "yaw": 5,
                                        "type": "equirectangular",
                                        "panorama": "imgs/panorama/pano2.jpg",
                                        "hotSpots": [
                                            {
                                                "pitch": -0.6,
                                                "yaw": 37.1,
                                                "type": "scene",
                                                "text": "Mason Circle",
                                                "sceneId": "circle",
                                                "targetYaw": -23,
                                                "targetPitch": 2
                                            }
                                        ]
                                    }
                                }
                            });
                            </script>

                    </div>
                </div>










            </div>
        </div>
    </div>
</div>
@endsection
