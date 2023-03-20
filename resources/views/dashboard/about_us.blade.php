@php use App\Models\GeneralSetting; @endphp
<x-dashboard.layouts.master title="{{__('dashboard.manage about-us')}}">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <x-dashboard.layouts.breadcrumb now="{{__('dashboard.manage about-us')}}">
                    </x-dashboard.layouts.breadcrumb>
                    <!-- Column selectors with Export Options and print table -->
                    <section id="column-selectors">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{__('dashboard.manage about-us')}}</h4>
                                    </div>
                                    @if(\Session::get('success'))
                                        <x-dashboard.layouts.message />
                                    @endif
                                    <div class="card-content">
                                        <div class="card-body ">
                                            <form method="POST" action="{{route('admin.aboutUs.setting.store')}}" enctype="multipart/form-data" >
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['about_title_ar']">{{__('dashboard.about us title').' '.__('dashboard.in arabic')}}</label>
                                                            <input type="text" class="form-control" name="type[page_about_title_ar]" value="{{old("type[page_about_title_ar]",GeneralSetting::getValueForKey('page_about_title_ar'))}}"  placeholder="{{__('dashboard.about us title').' '.__('dashboard.in arabic')}}" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['about_title_en']">{{__('dashboard.about us title').' '.__('dashboard.in english')}}</label>
                                                            <input type="text" class="form-control" name="type[page_about_title_en]" value="{{old("type[page_about_title_en]",GeneralSetting::getValueForKey('page_about_title_en'))}}"  placeholder="{{__('dashboard.about us title').' '.__('dashboard.in english')}}" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['about_exp_desc']">{{__('dashboard.table description').' '.__('dashboard.in arabic')}}</label>
                                                            <textarea class="form-control" rows="5" name="type[page_about_desc_ar]" required >{{old("type[page_about_desc_ar]",GeneralSetting::getValueForKey('page_about_desc_ar'))}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['about_exp_desc_en']">{{__('dashboard.table description').' '.__('dashboard.in english')}}</label>
                                                            <textarea class="form-control" rows="5" name="type[page_about_desc_en]" required >{{old("type[page_about_desc_en]",GeneralSetting::getValueForKey('page_about_desc_en'))}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['our_vision_desc_ar']">{{__('dashboard.Our vision').' '.__('dashboard.in arabic')}}</label>
                                                            <textarea class="form-control" rows="5" name="type[our_vision_desc_ar]" required >{{old("type[our_vision_desc_ar]",GeneralSetting::getValueForKey('our_vision_desc_ar'))}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['our_vision_desc_en']">{{__('dashboard.Our vision').' '.__('dashboard.in english')}}</label>
                                                            <textarea class="form-control" rows="5" name="type[our_vision_desc_en]" required >{{old("type[our_vision_desc_en]",GeneralSetting::getValueForKey('our_vision_desc_en'))}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['our_message_desc_ar']">{{__('dashboard.Our Message').' '.__('dashboard.in arabic')}}</label>
                                                            <textarea class="form-control" rows="5" name="type[our_message_desc_ar]" required >{{old("type[our_message_desc_ar]",GeneralSetting::getValueForKey('our_message_desc_ar'))}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="type['our_message_desc_en']">{{__('dashboard.Our Message').' '.__('dashboard.in english')}}</label>
                                                            <textarea class="form-control" rows="5" name="type[our_message_desc_en]" required >{{old("type[our_message_desc_en]",GeneralSetting::getValueForKey('our_message_desc_en'))}}</textarea>
                                                        </div>
                                                    </div>

                                                 </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-header">
                                                            <h4 class="card-title">{{__('dashboard.images & slider')}}</h4>
                                                        </div>
                                                    </div>

                                                    @for($i = 1 ; $i <= 2 ; $i++)
                                                        <div class="col-4 mt-4">
                                                            <div id="{{'uploadArea_about_vision_message'.$i}}" class="upload-area">
                                                                <div class="upload-area__header">
                                                                    <h1 class="upload-area__title">{{$i==1?__('dashboard.Our vision'):__('dashboard.Our Message')}}</h1>
                                                                    <p class="upload-area__paragraph">
                                                                        File should be an image
                                                                    </p>
                                                                </div>
                                                                <div id="{{'dropZoon_about_vision_message'.$i}}" onclick="openFileInput('#fileInput_about_vision_message{{$i}}')" class="upload-area__drop-zoon drop-zoon">
                                                                    <span class="drop-zoon__icon">
                                                                      <i class='bx bxs-file-image'></i>
                                                                    </span>
                                                                    <p class="drop-zoon__paragraph">Click to browse</p>
                                                                    <span id="loadingText_about_vision_message{{$i}}" class="drop-zoon__loading-text">Please Wait</span>
                                                                    <img src="{{$i == 1 ?asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('our_vision_image')):asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('our_message_image'))}}"
                                                                         alt="Preview Image" id="previewImage_about_vision_message{{$i}}" class="drop-zoon__preview-image" draggable="false"
                                                                         style="display:{{GeneralSetting::getValueForKey($i == 1?'our_vision_image':'our_message_image')?' block':'none'}}">
                                                                    <input type="file" id="fileInput_about_vision_message{{$i}}" name="{{$i==1?'our_vision':'our_message'}}_image" onchange="changeFileInput('dropZoon_about_vision_message{{$i}}','loadingText_about_vision_message{{$i}}','previewImage_about_vision_message{{$i}}','uploaded-file__counter_about_vision_message{{$i}}','uploadedFile_about_vision_message{{$i}}','uploadedFileInfo_about_vision_message{{$i}}','uploadArea_about_vision_message{{$i}}','fileDetails_about_vision_message{{$i}}','uploaded-file__name_about_vision_message{{$i}}','uploaded-file__icon-text_about_vision_message{{$i}}',event)" class="drop-zoon__file-input" accept="image/*">
                                                                </div>
                                                                <!-- End Drop Zoon -->

                                                                <!-- File Details -->
                                                                <div id="fileDetails_about_vision_message{{$i}}" class="upload-area__file-details file-details">
                                                                    <h3 class="file-details__title">Uploaded File</h3>

                                                                    <div id="uploadedFile_about_vision_message{{$i}}" class="uploaded-file">
                                                                        <div class="uploaded-file__icon-container">
                                                                            <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                                                            <span class="uploaded-file__icon-text_about_vision_message{{$i}}"></span> <!-- Data Will be Comes From Js -->
                                                                        </div>

                                                                        <div id="uploadedFileInfo_about_vision_message{{$i}}" class="uploaded-file__info">
                                                                            <span class="uploaded-file__name_about_vision_message{{$i}}">Slider-{{$i}}</span>
                                                                            <span class="uploaded-file__counter_about_vision_message{{$i}}">0%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End File Details -->
                                                            </div>
                                                            <!-- End Upload Area -->
                                                        </div>
                                                    @endfor
                                                    @for($i = 1 ; $i <= 4 ; $i++)
                                                        <div class="col-4 mt-4">
                                                            <div id="{{'uploadArea_about_slider'.$i}}" class="upload-area">
                                                                <div class="upload-area__header">
                                                                    <h1 class="upload-area__title">Slider image -{{$i}}</h1>
                                                                    <p class="upload-area__paragraph">
                                                                        File should be an image
                                                                    </p>
                                                                </div>
                                                                <div id="{{'dropZoon_about_slider'.$i}}" onclick="openFileInput('#fileInput_about_slider{{$i}}')" class="upload-area__drop-zoon drop-zoon">
                                                                    <span class="drop-zoon__icon">
                                                                      <i class='bx bxs-file-image'></i>
                                                                    </span>
                                                                    <p class="drop-zoon__paragraph">Click to browse</p>
                                                                    <span id="loadingText_about_slider{{$i}}" class="drop-zoon__loading-text">Please Wait</span>
                                                                    <img src="{{asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('about_slider_'.$i))}}" alt="Preview Image" id="previewImage_about_slider{{$i}}" class="drop-zoon__preview-image" draggable="false" style="{{GeneralSetting::getValueForKey('about_slider_'.$i)?'display: block;':'display:none'}}">
                                                                    <input type="file" id="fileInput_about_slider{{$i}}" name="about_slider[{{$i}}]" onchange="changeFileInput('dropZoon_about_slider{{$i}}','loadingText_about_slider{{$i}}','previewImage_about_slider{{$i}}','uploaded-file__counter_about_slider{{$i}}','uploadedFile_about_slider{{$i}}','uploadedFileInfo_about_slider{{$i}}','uploadArea_about_slider{{$i}}','fileDetails_about_slider{{$i}}','uploaded-file__name_about_slider{{$i}}','uploaded-file__icon-text_about_slider{{$i}}',event)" class="drop-zoon__file-input" accept="image/*">
                                                                </div>
                                                                <!-- End Drop Zoon -->

                                                                <!-- File Details -->
                                                                <div id="fileDetails_about_slider{{$i}}" class="upload-area__file-details file-details">
                                                                    <h3 class="file-details__title">Uploaded File</h3>

                                                                    <div id="uploadedFile_about_slider{{$i}}" class="uploaded-file">
                                                                        <div class="uploaded-file__icon-container">
                                                                            <i class='bx bxs-file-blank uploaded-file__icon'></i>
                                                                            <span class="uploaded-file__icon-text_about_slider{{$i}}"></span> <!-- Data Will be Comes From Js -->
                                                                        </div>

                                                                        <div id="uploadedFileInfo_about_slider{{$i}}" class="uploaded-file__info">
                                                                            <span class="uploaded-file__name_about_slider{{$i}}">Slider-{{$i}}</span>
                                                                            <span class="uploaded-file__counter_about_slider{{$i}}">0%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End File Details -->
                                                            </div>
                                                            <!-- End Upload Area -->
                                                        </div>
                                                    @endfor
                                                </div>
                                                 <div class="row mt-4">
                                                      <div class="col-12">
                                                          <button type="submit" class="btn btn-primary mr-1 mb-1">{{__('dashboard.submit')}}</button>
                                                      </div>
                                                 </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                         </div>
                     </section>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @section('script')
        <script>
            // Images Types
            const imagesTypes = ["jpeg", "png", "svg", "gif"];
            function openFileInput (id) {
                // Click The (fileInput)
                const fileInput = document.querySelector(id);
                fileInput.click();
            }

            // When (fileInput) has (change) Event
            function changeFileInput (dz,lt,pi,ufc,uf,ufi,ua,fd,ufn,ufit,event) {
                // Select The Chosen File
                const file = event.target.files[0];
                const dropZoon = document.querySelector('#'+dz);
                const loadingText = document.querySelector('#'+lt);
                const previewImage = document.querySelector('#'+pi);
                const uploadedFileCounter = document.querySelector('.'+ufc);
                const uploadedFile = document.querySelector('#'+uf);
                const uploadedFileInfo = document.querySelector('#'+ufi);
                const uploadArea = document.querySelector('#'+ua);
                const fileDetails = document.querySelector('#'+fd);
                const uploadedFileName = document.querySelector('.'+ufn);
                const uploadedFileIconText = document.querySelector('.'+ufit);

                // Call Function uploadFile(), And Send To Her The Chosen File :)
                uploadFile(file,dropZoon,loadingText,previewImage,uploadedFile,uploadedFileInfo,uploadArea,fileDetails,uploadedFileName,uploadedFileCounter,uploadedFileIconText);
            }

            // Upload File Function
            function uploadFile(file,dropZoon,loadingText,previewImage,uploadedFile,uploadedFileInfo,uploadArea,fileDetails,uploadedFileName,uploadedFileCounter,uploadedFileIconText) {
                // FileReader()
                const fileReader = new FileReader();
                // File Type
                const fileType = file.type;
                // File Size
                const fileSize = file.size;

                // If File Is Passed from the (File Validation) Function
                if (fileValidate(fileType, fileSize,uploadedFileIconText)) {
                    // Add Class (drop-zoon--Uploaded) on (drop-zoon)

                    dropZoon.classList.add('drop-zoon--Uploaded');

                    // Show Loading-text
                    loadingText.style.display = "block";
                    // Hide Preview Image
                    previewImage.style.display = 'none';

                    // Remove Class (uploaded-file--open) From (uploadedFile)
                    uploadedFile.classList.remove('uploaded-file--open');
                    // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
                    uploadedFileInfo.classList.remove('uploaded-file__info--active');

                    // After File Reader Loaded
                    fileReader.addEventListener('load', function () {
                        // After Half Second
                        setTimeout(function () {
                            // Add Class (upload-area--open) On (uploadArea)
                            uploadArea.classList.add('upload-area--open');

                            // Hide Loading-text (please-wait) Element
                            loadingText.style.display = "none";
                            // Show Preview Image
                            previewImage.style.display = 'block';

                            // Add Class (file-details--open) On (fileDetails)
                            fileDetails.classList.add('file-details--open');
                            // Add Class (uploaded-file--open) On (uploadedFile)
                            uploadedFile.classList.add('uploaded-file--open');
                            // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
                            uploadedFileInfo.classList.add('uploaded-file__info--active');
                        }, 500); // 0.5s

                        // Add The (fileReader) Result Inside (previewImage) Source
                        previewImage.setAttribute('src', fileReader.result);

                        // Add File Name Inside Uploaded File Name
                        uploadedFileName.innerHTML = file.name;

                        // Call Function progressMove();
                        progressMove(uploadedFileCounter);
                    });

                    // Read (file) As Data Url
                    fileReader.readAsDataURL(file);
                } else { // Else

                    this; // (this) Represent The fileValidate(fileType, fileSize) Function

                };
            };

            // Progress Counter Increase Function
            function progressMove(uploadedFileCounter) {
                // Counter Start
                let counter = 0;

                // After 600ms
                setTimeout(() => {
                    // Every 100ms
                    let counterIncrease = setInterval(() => {
                        // If (counter) is equle 100
                        if (counter === 100) {
                            // Stop (Counter Increase)
                            clearInterval(counterIncrease);
                        } else { // Else
                            // plus 10 on counter
                            counter = counter + 10;
                            // add (counter) vlaue inisde (uploadedFileCounter)
                            uploadedFileCounter.innerHTML = `${counter}%`
                        }
                    }, 100);
                }, 600);
            };


            // Simple File Validate Function
            function fileValidate(fileType, fileSize,uploadedFileIconText) {
                // File Type Validation
                let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

                // If The Uploaded File Type Is 'jpeg'
                if (isImage[0] === 'jpeg') {
                    // Add Inisde (uploadedFileIconText) The (jpg) Value
                    uploadedFileIconText.innerHTML = 'jpg';
                } else { // else
                    // Add Inisde (uploadedFileIconText) The Uploaded File Type
                    uploadedFileIconText.innerHTML = isImage[0];
                };

                // If The Uploaded File Is An Image
                if (isImage.length !== 0) {
                    // Check, If File Size Is 2MB or Less
                    if (fileSize <= 2000000) { // 2MB :)
                        return true;
                    } else { // Else File Size
                        return alert('Please Your File Should be 2 Megabytes or Less');
                    };
                } else { // Else File Type
                    return alert('Please make sure to upload An Image File Type');
                };
            };

            // :)
        </script>
    @endsection
</x-dashboard.layouts.master>
