<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Menu
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input wire:model="long" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Lattitude</label>
                                <input wire:model="lat" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Rencana Tata Ruang Online
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 75vh;'></div>
                </div>
            </div>
        </div>
{{-- If your happiness depends on money, you will never be happy with yourself. --}}
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', () => {
            const defaultLocation = [106.79987285179044, -6.238227569626474];

            mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
            var map = new mapboxgl.Map({
            container: 'map',
            center: defaultLocation,
            zoom: 11.15,
            });

            const geoJson = {
            "type": "FeatureCollection",
            "features": [
                {
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                    "106.73830754205",
                    "-6.2922403995615"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "message": "Mantap",
                    "iconSize": [
                    50,
                    50
                    ],
                    "locationId": 30,
                    "title": "Hello new",
                    "image": "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
                    "description": "Mantap"
                }
                },
                {
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                    "106.68681595869",
                    "-6.3292244652013"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "message": "oke mantap Edit",
                    "iconSize": [
                    50,
                    50
                    ],
                    "locationId": 29,
                    "title": "Rumah saya Edit",
                    "image": "0ea59991df2cb96b4df6e32307ea20ff.png",
                    "description": "oke mantap Edit"
                }
                },
                {
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                    "106.62490035406",
                    "-6.3266855038639"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "message": "Update Baru",
                    "iconSize": [
                    50,
                    50
                    ],
                    "locationId": 22,
                    "title": "Update Baru Gambar",
                    "image": "d09444b68d8b72daa324f97c999c2301.jpeg",
                    "description": "Update Baru"
                }
                },
                {
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                    "106.72391468711",
                    "-6.3934163494543"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    "iconSize": [
                    50,
                    50
                    ],
                    "locationId": 19,
                    "title": "awdwad",
                    "image": "f0b88ffd980a764b9fca60d853b300ff.png",
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                }
                },
                {
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                    "106.67224158205",
                    "-6.3884963990263"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                    "iconSize": [
                    50,
                    50
                    ],
                    "locationId": 18,
                    "title": "adwawd",
                    "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
                }
                },
                {
                "type": "Feature",
                "geometry": {
                    "coordinates": [
                    "106.74495523289",
                    "-6.3642034511073"
                    ],
                    "type": "Point"
                },
                "properties": {
                    "message": "awdwad",
                    "iconSize": [
                    50,
                    50
                    ],
                    "locationId": 12,
                    "title": "adawd",
                    "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
                    "description": "awdwad"
                }
                }
            ]
            }

            const loadLocation = () => {
                geoJson.features.forEach((location) => {
                    const {geometry, properties} = location
                    const {iconSize, locationId, title, image, description} = properties

                    let markerElement = document.createElement('div')
                    markerElement.className = 'marker' + locationId
                    markerElement.id = locationId
                    markerElement.style.backgroundImage = 'url(https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/325/round-pushpin_1f4cd.png)'
                    markerElement.style.backgroundSize = 'cover'
                    markerElement.style.width = '50px'
                    markerElement.style.height = '50px'

                    const content = `
                        <div style="overflow-y, auto; max-height:400px, width:100%">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Judul</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Objek                  :</td>
                                        <td>${title}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Provinsi               : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Daerah               : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Data                 : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor dan Tahun Peraturan   : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Peta Perda                  : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Berita Acara                : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Batang Tubuh                : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Shape_Length                : </td>
                                        <td>${description}</td>
                                    </tr>
                                    <tr>
                                        <td>Shape_Area                  : </td>
                                        <td>${description}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    `

                    const popUp = new mapboxgl.Popup({
                        offset:25
                    }).setHTML(content).setMaxWidth("400px")

                    new mapboxgl.Marker(markerElement)
                    .setLngLat(geometry.coordinates)
                    .setPopup(popUp)
                    .addTo(map)
                })
            }

            loadLocation()

            const style = "dark-v10"
            //light-v10, outdoorts-v11, satellite-v9, streets-v11, dark-v10
            map.setStyle(`mapbox://styles/mapbox/${style}`)

            map.addControl(new mapboxgl.NavigationControl())

            map.on('click', (e) => {
                const longtitude = e.lngLat.lng
                const lattitude = e.lngLat.lat

                @this.long = longtitude
                @this.lat = lattitude

                console.log({longtitude, lattitude});
        })
        })
    </script>
@endpush