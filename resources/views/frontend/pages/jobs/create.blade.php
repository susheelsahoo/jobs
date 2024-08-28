@extends('frontend.layouts.master')
@section('title')
Job Application
@endsection

@section('styles')

@endsection


@section('admin-content')


<div class="slider">
    <div class="listing-banner">
        <div class="listing-overlay text-white">
            <div class="container mt-0 mt-md-7">
                <h2 class="main-heading text-white ">Application Form</h2>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-weight-light">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Applied Job Name</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  START  -->


<div class="mid-bg py-4">
    <div class="container">
        <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">Kindly apply based on the availability of seats in the district.
                    <br />Candidates are required to upload self attested documents.
                </div>
                <div class="col-md-6">
                    <div class="text-right text-danger mb-3"> '<span class="font-weight-bold">*</span>' Fields are Mandatory</div>
                </div>

                <div class="col-md-12 mt-2 right-section mb-4">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4">Post Applied </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Post Applied for</label>
                                        <input class="form-control" name="position" type="text" value="{{ $jobName }}" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Prefered Location 1 <span class="text-danger">*</span></label>
                                        <select id="inputState" name="prefered_location_1" class="form-control" required>
                                            <option value="--Select--">--Select--</option>
                                            <option value="UTTARKASHI">UTTARKASHI</option>
                                            <option value="NAINITAL">NAINITAL</option>
                                            <option value="UDHAM SINGH NAGAR">UDHAM SINGH NAGAR</option>
                                            <option value="Champawat">Champawat</option>
                                            <option value="CHAMOLI">CHAMOLI</option>
                                            <option value="ALMORA">ALMORA</option>
                                            <option value="BAGESHWAR">BAGESHWAR</option>
                                            <option value="DEHRADUN">DEHRADUN</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Prefered Location 2 <span class="text-danger">*</span></label>
                                        <select id="inputState" name="prefered_location_2" class="form-control" required>
                                            <option value="--Select--">--Select--</option>








                                            <option value="UTTARKASHI">UTTARKASHI</option>
                                            <option value="NAINITAL">NAINITAL</option>
                                            <option value="UDHAM SINGH NAGAR">UDHAM SINGH NAGAR</option>
                                            <option value="Champawat">Champawat</option>
                                            <option value="CHAMOLI">CHAMOLI</option>
                                            <option value="ALMORA">ALMORA</option>
                                            <option value="BAGESHWAR">BAGESHWAR</option>
                                            <option value="DEHRADUN">DEHRADUN</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 d-none">
                                        <label for="inputState">Prefered Location 3 <span class="text-danger">*</span></label>
                                        <select id="inputState" name="prefered_location_3" class="form-control">
                                            <option value="--Select--">--Select--</option>
                                            <option value="UTTARKASHI">UTTARKASHI</option>
                                            <option value="NAINITAL">NAINITAL</option>
                                            <option value="UDHAM SINGH NAGAR">UDHAM SINGH NAGAR</option>
                                            <option value="Champawat">Champawat</option>
                                            <option value="CHAMOLI">CHAMOLI</option>
                                            <option value="ALMORA">ALMORA</option>
                                            <option value="BAGESHWAR">BAGESHWAR</option>
                                            <option value="DEHRADUN">DEHRADUN</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--	post applied  section end-->
                <!--	Personal Details  section start-->
                <div class=" col-md-12 right-section  mb-4 ">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4">Personal Details</div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState"> Name <span class="text-danger">*</span> (as per Aadhaar Card) :</label>
                                        <input type="text" name="applicant_name" placeholder="Applicant Name" class="form-control" required>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Aadhaar Card No. <span class="text-danger">*</span> :</label>
                                        <input type="number" name="aadhaar_card_no" placeholder="Aadhaar Card Number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState"> PAN Card No. <span class="text-danger">*</span> : </label>
                                        <input type="text" name="pan_card_no" placeholder="PAN Card Number" class="form-control" required>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState"> Date of Birth ( as per AADHAR CARD ) <span class="text-danger">*</span> : </label>
                                        <input type="date" name="dob" aria-label="Last name" placeholder="Date of Birth" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState"> Place of Birth ( Place & State) <span class="text-danger">*</span> : </label>
                                        <div class="input-group   ">
                                            <input type="text" name="birth_place" class="form-control  " placeholder="Birth Place">
                                            <div class="input-group-append btn-sm p-0">
                                                <select id="birth_state" name="birth_state" class="form-control" required>
                                                    <option value="">--State--</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState"> Gender <span class="text-danger">*</span> : </label>
                                        <div class="row">
                                            <div class="col-5 col-md-4 mt-1">
                                                <input type="radio" id="male" name="gender" value="male" required>
                                                <label for="male">Male</label>
                                            </div>
                                            <div class="col-7 col-md-4 mt-1">
                                                <input type="radio" id="Female" name="gender" value="Female" required>
                                                <label for="female">Female</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 ">
                                <div class="form-row d-none">
                                    <div class="form-group col-md-6 d-none">
                                        <label for="caste_category">Caste Category :</label>
                                        <div class="input-group ">
                                            <div class="input-group-append btn-sm p-0 w-100">
                                                <select id="caste_category" name="caste_category" class="form-control col-4">
                                                    <option>GEN</option>
                                                    <option>EWS</option>
                                                    <option>OBC</option>
                                                    <option>MBC</option>
                                                    <option>SC</option>
                                                    <option>ST</option>
                                                    <option>Minority</option>
                                                    <option>Other</option>
                                                </select>
                                                <input type="text" name="caste_category_other" class="form-control col-8" placeholder="If Other Kindly Mention ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Religion :</label>
                                        <div class="input-group ">
                                            <div class="input-group-append btn-sm p-0 w-100">
                                                <select id="Religion" name="religion" class="form-control col-4">
                                                    <option>Hinduism </option>
                                                    <option>Christianity</option>
                                                    <option>Islam</option>
                                                    <option>Buddhism</option>
                                                    <option>Other</option>
                                                </select>
                                                <input type="text" name="religion_details" class="form-control col-8" placeholder="If Other Kindly Mention ">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputState"> Nationality <span class="text-danger">*</span> : </label>
                                        <select name="nationality" class="form-control" required>
                                            <option value="">-- select one --</option>
                                            <option value="afghan">Afghan</option>
                                            <option value="albanian">Albanian</option>
                                            <option value="algerian">Algerian</option>
                                            <option value="american">American</option>
                                            <option value="andorran">Andorran</option>
                                            <option value="angolan">Angolan</option>
                                            <option value="antiguans">Antiguans</option>
                                            <option value="argentinean">Argentinean</option>
                                            <option value="armenian">Armenian</option>
                                            <option value="australian">Australian</option>
                                            <option value="austrian">Austrian</option>
                                            <option value="azerbaijani">Azerbaijani</option>
                                            <option value="bahamian">Bahamian</option>
                                            <option value="bahraini">Bahraini</option>
                                            <option value="bangladeshi">Bangladeshi</option>
                                            <option value="barbadian">Barbadian</option>
                                            <option value="barbudans">Barbudans</option>
                                            <option value="batswana">Batswana</option>
                                            <option value="belarusian">Belarusian</option>
                                            <option value="belgian">Belgian</option>
                                            <option value="belizean">Belizean</option>
                                            <option value="beninese">Beninese</option>
                                            <option value="bhutanese">Bhutanese</option>
                                            <option value="bolivian">Bolivian</option>
                                            <option value="bosnian">Bosnian</option>
                                            <option value="brazilian">Brazilian</option>
                                            <option value="british">British</option>
                                            <option value="bruneian">Bruneian</option>
                                            <option value="bulgarian">Bulgarian</option>
                                            <option value="burkinabe">Burkinabe</option>
                                            <option value="burmese">Burmese</option>
                                            <option value="burundian">Burundian</option>
                                            <option value="cambodian">Cambodian</option>
                                            <option value="cameroonian">Cameroonian</option>
                                            <option value="canadian">Canadian</option>
                                            <option value="cape verdean">Cape Verdean</option>
                                            <option value="central african">Central African</option>
                                            <option value="chadian">Chadian</option>
                                            <option value="chilean">Chilean</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="colombian">Colombian</option>
                                            <option value="comoran">Comoran</option>
                                            <option value="congolese">Congolese</option>
                                            <option value="costa rican">Costa Rican</option>
                                            <option value="croatian">Croatian</option>
                                            <option value="cuban">Cuban</option>
                                            <option value="cypriot">Cypriot</option>
                                            <option value="czech">Czech</option>
                                            <option value="danish">Danish</option>
                                            <option value="djibouti">Djibouti</option>
                                            <option value="dominican">Dominican</option>
                                            <option value="dutch">Dutch</option>
                                            <option value="east timorese">East Timorese</option>
                                            <option value="ecuadorean">Ecuadorean</option>
                                            <option value="egyptian">Egyptian</option>
                                            <option value="emirian">Emirian</option>
                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                            <option value="eritrean">Eritrean</option>
                                            <option value="estonian">Estonian</option>
                                            <option value="ethiopian">Ethiopian</option>
                                            <option value="fijian">Fijian</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="finnish">Finnish</option>
                                            <option value="french">French</option>
                                            <option value="gabonese">Gabonese</option>
                                            <option value="gambian">Gambian</option>
                                            <option value="georgian">Georgian</option>
                                            <option value="german">German</option>
                                            <option value="ghanaian">Ghanaian</option>
                                            <option value="greek">Greek</option>
                                            <option value="grenadian">Grenadian</option>
                                            <option value="guatemalan">Guatemalan</option>
                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                            <option value="guinean">Guinean</option>
                                            <option value="guyanese">Guyanese</option>
                                            <option value="haitian">Haitian</option>
                                            <option value="herzegovinian">Herzegovinian</option>
                                            <option value="honduran">Honduran</option>
                                            <option value="hungarian">Hungarian</option>
                                            <option value="icelander">Icelander</option>
                                            <option selected value="indian">Indian</option>
                                            <option value="indonesian">Indonesian</option>
                                            <option value="iranian">Iranian</option>
                                            <option value="iraqi">Iraqi</option>
                                            <option value="irish">Irish</option>
                                            <option value="israeli">Israeli</option>
                                            <option value="italian">Italian</option>
                                            <option value="ivorian">Ivorian</option>
                                            <option value="jamaican">Jamaican</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="jordanian">Jordanian</option>
                                            <option value="kazakhstani">Kazakhstani</option>
                                            <option value="kenyan">Kenyan</option>
                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                            <option value="kuwaiti">Kuwaiti</option>
                                            <option value="kyrgyz">Kyrgyz</option>
                                            <option value="laotian">Laotian</option>
                                            <option value="latvian">Latvian</option>
                                            <option value="lebanese">Lebanese</option>
                                            <option value="liberian">Liberian</option>
                                            <option value="libyan">Libyan</option>
                                            <option value="liechtensteiner">Liechtensteiner</option>
                                            <option value="lithuanian">Lithuanian</option>
                                            <option value="luxembourger">Luxembourger</option>
                                            <option value="macedonian">Macedonian</option>
                                            <option value="malagasy">Malagasy</option>
                                            <option value="malawian">Malawian</option>
                                            <option value="malaysian">Malaysian</option>
                                            <option value="maldivan">Maldivan</option>
                                            <option value="malian">Malian</option>
                                            <option value="maltese">Maltese</option>
                                            <option value="marshallese">Marshallese</option>
                                            <option value="mauritanian">Mauritanian</option>
                                            <option value="mauritian">Mauritian</option>
                                            <option value="mexican">Mexican</option>
                                            <option value="micronesian">Micronesian</option>
                                            <option value="moldovan">Moldovan</option>
                                            <option value="monacan">Monacan</option>
                                            <option value="mongolian">Mongolian</option>
                                            <option value="moroccan">Moroccan</option>
                                            <option value="mosotho">Mosotho</option>
                                            <option value="motswana">Motswana</option>
                                            <option value="mozambican">Mozambican</option>
                                            <option value="namibian">Namibian</option>
                                            <option value="nauruan">Nauruan</option>
                                            <option value="nepalese">Nepalese</option>
                                            <option value="new zealander">New Zealander</option>
                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                            <option value="nicaraguan">Nicaraguan</option>
                                            <option value="nigerien">Nigerien</option>
                                            <option value="north korean">North Korean</option>
                                            <option value="northern irish">Northern Irish</option>
                                            <option value="norwegian">Norwegian</option>
                                            <option value="omani">Omani</option>
                                            <option value="pakistani">Pakistani</option>
                                            <option value="palauan">Palauan</option>
                                            <option value="panamanian">Panamanian</option>
                                            <option value="papua new guinean">Papua New Guinean</option>
                                            <option value="paraguayan">Paraguayan</option>
                                            <option value="peruvian">Peruvian</option>
                                            <option value="polish">Polish</option>
                                            <option value="portuguese">Portuguese</option>
                                            <option value="qatari">Qatari</option>
                                            <option value="romanian">Romanian</option>
                                            <option value="russian">Russian</option>
                                            <option value="rwandan">Rwandan</option>
                                            <option value="saint lucian">Saint Lucian</option>
                                            <option value="salvadoran">Salvadoran</option>
                                            <option value="samoan">Samoan</option>
                                            <option value="san marinese">San Marinese</option>
                                            <option value="sao tomean">Sao Tomean</option>
                                            <option value="saudi">Saudi</option>
                                            <option value="scottish">Scottish</option>
                                            <option value="senegalese">Senegalese</option>
                                            <option value="serbian">Serbian</option>
                                            <option value="seychellois">Seychellois</option>
                                            <option value="sierra leonean">Sierra Leonean</option>
                                            <option value="singaporean">Singaporean</option>
                                            <option value="slovakian">Slovakian</option>
                                            <option value="slovenian">Slovenian</option>
                                            <option value="solomon islander">Solomon Islander</option>
                                            <option value="somali">Somali</option>
                                            <option value="south african">South African</option>
                                            <option value="south korean">South Korean</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="sri lankan">Sri Lankan</option>
                                            <option value="sudanese">Sudanese</option>
                                            <option value="surinamer">Surinamer</option>
                                            <option value="swazi">Swazi</option>
                                            <option value="swedish">Swedish</option>
                                            <option value="swiss">Swiss</option>
                                            <option value="syrian">Syrian</option>
                                            <option value="taiwanese">Taiwanese</option>
                                            <option value="tajik">Tajik</option>
                                            <option value="tanzanian">Tanzanian</option>
                                            <option value="thai">Thai</option>
                                            <option value="togolese">Togolese</option>
                                            <option value="tongan">Tongan</option>
                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                            <option value="tunisian">Tunisian</option>
                                            <option value="turkish">Turkish</option>
                                            <option value="tuvaluan">Tuvaluan</option>
                                            <option value="ugandan">Ugandan</option>
                                            <option value="ukrainian">Ukrainian</option>
                                            <option value="uruguayan">Uruguayan</option>
                                            <option value="uzbekistani">Uzbekistani</option>
                                            <option value="venezuelan">Venezuelan</option>
                                            <option value="vietnamese">Vietnamese</option>
                                            <option value="welsh">Welsh</option>
                                            <option value="yemenite">Yemenite</option>
                                            <option value="zambian">Zambian</option>
                                            <option value="zimbabwean">Zimbabwean</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Physically Challenged <span class="text-danger">*</span> :</label>
                                        <div class="input-group ">
                                            <div class="input-group-append btn-sm p-0 w-100">
                                                <select id="inputState" name="physically_challenged" class="form-control col-4" required>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                                <input type="text" name="physically_challenged_details" class="form-control col-8" placeholder="If Yes Kindly Mention ">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Address <span class="text-danger">*</span>( with PIN Code ) :</label>
                                        <input type="text" name="address" aria-label="Last name" placeholder="Address" class="form-control" required>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">City<span class="text-danger">*</span> :</label>
                                        <input type="text" name="city" aria-label="Last name" placeholder="City" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="state">State <span class="text-danger">*</span> :</label>
                                        <select id="state" name="state" class="form-control" required>
                                            <option value="AP">Andhra Pradesh</option>
                                            <option value="AR">Arunachal Pradesh</option>
                                            <option value="AS">Assam</option>
                                            <option value="BR">Bihar</option>
                                            <option value="CT">Chhattisgarh</option>
                                            <option value="GA">Gujarat</option>
                                            <option value="HR">Haryana</option>
                                            <option value="HP">Himachal Pradesh</option>
                                            <option value="JK">Jammu and Kashmir</option>
                                            <option value="GA">Goa</option>
                                            <option value="JH">Jharkhand</option>
                                            <option value="KA">Karnataka</option>
                                            <option value="KL">Kerala</option>
                                            <option value="MP">Madhya Pradesh</option>
                                            <option value="MH">Maharashtra</option>
                                            <option value="MN">Manipur</option>
                                            <option value="ML">Meghalaya</option>
                                            <option value="MZ">Mizoram</option>
                                            <option value="NL">Nagaland</option>
                                            <option value="OR">Odisha</option>
                                            <option value="PB">Punjab</option>
                                            <option value="RJ">Rajasthan</option>
                                            <option value="SK">Sikkim</option>
                                            <option value="TN">Tamil Nadu</option>
                                            <option value="TG">Telangana</option>
                                            <option value="TR">Tripura</option>
                                            <option value="UT">Uttarakhand</option>
                                            <option value="UP">Uttar Pradesh</option>
                                            <option value="WB">West Bengal</option>
                                            <option value="AN">Andaman and Nicobar Islands</option>
                                            <option value="CH">Chandigarh</option>
                                            <option value="DN">Dadra and Nagar Haveli</option>
                                            <option value="DD">Daman and Diu</option>
                                            <option value="DL">Delhi</option>
                                            <option value="LD">Lakshadweep</option>
                                            <option value="PY">Puducherry</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="marital_status">Marital Status <span class="text-danger">*</span> :</label>
                                        <select id="marital_status" name="marital_status" class="form-control" required>
                                            <option>Single </option>
                                            <option>Married </option>
                                            <option>Separated </option>
                                            <option>Divorced </option>
                                            <option>Widowed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="father_name">Father's Name <span class="text-danger">*</span>(as per Aadhaar Card) :</label>
                                        <input type="text" name="father_name" aria-label="Last name" placeholder="Father's Name" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="husband_wife">Husband / Wife Name(as per Aadhaar Card) :</label>
                                        <input type="text" name="husband_wife" name="Ankit sahu" aria-label="Last name" placeholder="Husband / Wife Name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="phone_number">Phone Number <span class="text-danger">*</span>:</label>
                                        <input type="number" name="phone_number" placeholder="Phone Number" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">E-Mail address<span class="text-danger">*</span>:</label>
                                        <input type="text" name="email" placeholder="E-Mail address" class="form-control" required>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="uan_number">Previous UAN Number :</label>
                                        <input type="text" name="uan_number" placeholder=" Previous UAN Number" class="form-control">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="esi_number">Previous ESIC Number :</label>
                                        <input type="text" name="esi_number" placeholder="Previous ESIC Number" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--	Personal Details  section end-->
                <!--Other Detail section Start-->
                <div class=" col-md-12   mb-4 ">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4">Faculty Registration Details :
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Registration No.:</label>
                                        <input class="form-control" name="registration_number" type="text" placeholder="Registration No">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Date of Registration : </label>
                                        <input class="form-control" type="date" value="<?php echo date('Y-m-d'); ?>" placeholder="Date of Registration ">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Name of registered Faculty/Council : </label>
                                        <input class="form-control" name="name_of_registered_faculty" type="text" placeholder="Name of registered Faculty/Council">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Name of Degree : </label>
                                        <input class="form-control" name="degree" type="text" placeholder="Name of Degree  ">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="inputState">Uttarakhand Medical/Nursing/Paramedical/Pharmacy Council/Faculty Registration Certificate : </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="registration_certificate" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                            </div>
                                            <!-- <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Other Detaial Section End-->
                <!--Education section Start-->
                <div class=" col-md-12   mb-4 ">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4">Uttarakhand Medical/Nursing/Paramedical/Pharmacy Council/Faculty Registration Details :
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-12 table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="border-top-0">
                                                    <th scope="col"></th>
                                                    <th scope="col">Exam Passed </th>
                                                    <th scope="col">Branch / Subject </th>
                                                    <th scope="col">Percentage </th>
                                                    <th scope="col">Month & Year of Passing </th>
                                                    <th scope="col">College </th>
                                                    <th scope="col">University / Board Of Examination</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Main Qualification <span class="text-danger">*</span></th>
                                                    <td><input class="form-control" type="number" name="main_qualification_year" placeholder="Exam Passed"></td>
                                                    <td><input class="form-control" type="text" name="main_qualification_branch" placeholder="Branch"></td>
                                                    <td><input class="form-control" type="number" name="main_qualification_percentage" placeholder="Percentage"></td>
                                                    <td><input class="form-control" type="month" name="main_qualification_date" placeholder="Month & Year"> </td>
                                                    <td><input class="form-control" type="text" name="main_qualification_college" placeholder="College"></td>
                                                    <td><input class="form-control" type="text" name="main_qualification_univercity" placeholder="University"></td>

                                                </tr>

                                                <tr>
                                                    <th scope="row">Additional Qualification</th>
                                                    <td><input class="form-control" type="number" name="additiional_qualification_year" placeholder="Exam Passed"></td>
                                                    <td><input class="form-control" type="text" name="additiional_qualification_branch" placeholder="Branch"></td>
                                                    <td><input class="form-control" type="number" name="additiional_qualification_percentage" placeholder="Percentage"></td>
                                                    <td><input class="form-control" type="month" name="additiional_qualification_date" placeholder="Month & Year"> </td>
                                                    <td><input class="form-control" type="text" name="additiional_qualification_college" placeholder="College"></td>
                                                    <td><input class="form-control" type="text" name="additiional_qualification_univercity" placeholder="University"></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Additional Qualification </th>
                                                    <td><input class="form-control" type="number" name="additiional1_qualification_year" placeholder="Exam Passed"></td>
                                                    <td><input class="form-control" type="text" name="additiional1_qualification_branch" placeholder="Branch"></td>
                                                    <td><input class="form-control" type="number" name="additiional1_qualification_percentage" placeholder="Percentage"></td>
                                                    <td><input class="form-control" type="month" name="additiional1_qualification_date" placeholder="Month & Year"> </td>
                                                    <td><input class="form-control" type="text" name="additiional1_qualification_college" placeholder="College"></td>
                                                    <td><input class="form-control" type="text" name="additiional1_qualification_univercity" placeholder="University"></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row"> </th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <!-- <button type="button" class="btn btn-secondary btn-sm">Add More</button> -->
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Education Section End-->
                <!--Experience section Start-->
                <div class=" col-md-12   mb-4 ">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4"> Professional Experience Details <span class="text-danger h6">( Latest Experience at the Top )
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="professional_exp" name="professional_exp" value="Not Working Presently">
                                        <label for="professional_exp"> Not Working Presently</label>
                                    </div>
                                </span>
                            </div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="border-top-0">
                                                        <th>From (Month & Year)</th>
                                                        <th>To (Month & Year) </th>
                                                        <th style="min-width:200px">Organisation </th>
                                                        <th style="min-width:200px">Place of work</th>
                                                        <th style="min-width:200px">Post Held </th>
                                                        <th style="min-width:300px">Brief Description of job Profile </th>
                                                        <th>Relevant Experience</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th><input class="form-control" name="exp1_start_date" type="month" placeholder="Month &amp; Year  "></th>
                                                        <td><input class="form-control" name="exp1_end_date" type="month" placeholder="Month &amp; Year  "></td>
                                                        <td><input class="form-control" name="exp1_company_name" type="text" placeholder="Organisation Name "></td>
                                                        <td><input class="form-control" name="exp1_location" type="text" placeholder="City" aria-describedby="button-addon1"> </td>
                                                        <td><input class="form-control" name="exp1_post_hold" type="text" placeholder="Post Held	 "></td>
                                                        <td><input class="form-control" name="exp1_job_discription" type="text" placeholder="Job Description"> </td>
                                                        <td>
                                                            <select id="exp1_relevant" name="exp1_relevant" class="form-control">
                                                                <option>Yes</option>
                                                                <option>No</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><input class="form-control" name="exp2_start_date" type="month" placeholder="Month &amp; Year  "></th>
                                                        <td><input class="form-control" name="exp2_end_date" type="month" placeholder="Month &amp; Year  "></td>
                                                        <td><input class="form-control" name="exp2_company_name" type="text" placeholder="Organisation Name "></td>
                                                        <td><input class="form-control" name="exp2_location" type="text" placeholder="City" aria-describedby="button-addon1"> </td>
                                                        <td><input class="form-control" name="exp2_post_hold" type="text" placeholder="Post Held	 "></td>
                                                        <td><input class="form-control" name="exp2_job_discription" type="text" placeholder="Job Description"> </td>
                                                        <td>
                                                            <select id="exp2_relevant" name="exp2_relevant" class="form-control">
                                                                <option>Yes</option>
                                                                <option>No</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-3">
                                            <!-- Total Experience (Years, Month) :- <span class="text-info">0</span> Years <span class="text-info">0</span> Months -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Education Section End-->
                <!--PAY DETAILS  section Start-->
                <div class=" col-md-12   mb-4 ">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4"> Pay Details</div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-12 mb-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Years</th>
                                                        <th scope="col">Annual CTC in Rupees</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Current Annual CTC : <span class="text-danger">*</span></td>
                                                        <td><input type="text" aria-label="Last name" placeholder=" Current CTC" class="form-control"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--PAY DETAILS  Section End-->
                <!--Upload  section Start-->
                <div class=" col-md-12   mb-4 ">
                    <div class="card rounded-0 shadow-sm border-0">
                        <div class="card-body ">
                            <div class="clearfix"></div>
                            <div class="heading2 pb-2 border-bottom mb-4"> Upload Documents</div>
                            <div class="mt-3">
                                <div class="form-row">
                                    <div class="form-group col-md-12 mb-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="border-top-0">
                                                        <th>Document Name</th>
                                                        <th>Upload</th>
                                                        <!-- <th>Preview </th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Upload: Photo(Passport Size)<span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 300 KB & Image File Format(.png, .jpg, .jpeg, .bmp, .gif)</div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="Upload_photo" class="custom-file-input" id="Upload_photo">
                                                                <label class="custom-file-label" for="Upload_photo">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../html/images/review1.jpg" alt="..." class="img-thumbnail"></td> -->
                                                    </tr>
                                                    <tr class="d-none">
                                                        <td>
                                                            Upload: Signature<span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 300 KB & Image File Format(.png, .jpg, .jpeg, .bmp, .gif)</div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="signature" class="custom-file-input" id="signature">
                                                                <label class="custom-file-label" for="signature">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../.." alt="..." class="img-thumbnail"></td> -->
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Upload: Detailed Resume(PDF or Word File)<span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 2MB </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="resume" class="custom-file-input" id="resume">
                                                                <label class="custom-file-label" for="resume">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../.." alt="..." class="img-thumbnail"></td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Upload: Highest Qualification Marksheet (PDF File)
                                                            <span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 2MB </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="HighestQualificationMarksheet" class="custom-file-input" id="HighestQualificationMarksheet">
                                                                <label class="custom-file-label" for="HighestQualificationMarksheet">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../.." alt="..." class="img-thumbnail"></td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Upload: AADHAR CARD(PDF File)
                                                            <span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 2MB </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="aadhar_card" class="custom-file-input" id="aadhar_card">
                                                                <label class="custom-file-label" for="aadhar_card">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../.." alt="..." class="img-thumbnail"></td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Upload: PAN CARD(PDF File)

                                                            <span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 2MB </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="pan_card" class="custom-file-input" id="pan_card">
                                                                <label class="custom-file-label" for="pan_card">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../.." alt="..." class="img-thumbnail"></td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Upload: Work Experience Letter(PDF File)

                                                            <span class="text-danger">*</span>
                                                            <div class="text-danger font-13">maximum file size 2MB </div>
                                                        </td>
                                                        <td>
                                                            <div class="custom-file">
                                                                <input type="file" name="exp_latter" class="custom-file-input" id="exp_latter">
                                                                <label class="custom-file-label" for="exp_latter">Choose file...</label>
                                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                            </div>
                                                        </td>
                                                        <!-- <td><img src="../.." alt="..." class="img-thumbnail"></td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Describe how the Candidate considers himself best suitable for this Post
                                                <div class="text-danger font-13"> ( Max. 100 words) </div>
                                            </label>
                                            <textarea class="form-control" name="applicent_remark" id="applicent_remark" rows="3"></textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-right"><button type="submit" class="btn btn-secondary mt-3">Reset</button>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>
                </div>
                <!--PAY DETAILS  Section End-->

            </div>
        </form>
    </div>
    <!-- End   -->
    @endsection

    @section('scripts')

    <script>
        //$('.custom-file-input').on('change', function() {
        //  var fileName = $(this).val();
        //$(this).next('.custom-file-label').html(fileName);
        //})
    </script>

    @endsection