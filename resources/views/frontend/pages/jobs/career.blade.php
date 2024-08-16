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
                <h2 class="main-heading text-white ">Current Openings</h2>
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-weight-light">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  START  -->

<div class="mid-bg py-4 ">
    <div class="container">
        <div class="row">

            <!--	Intro section start-->
            <!-- <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Filters </div>
                        <div class="mt-3">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">State <span class="text-danger">*</span> :</label>
                                    <select id="inputState" class="form-control">
                                        <option>All State</option>

                                        <option>Delhi</option>
                                    </select>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Select Post</label>
                                    <select id="inputState" class="form-control">
                                        <option>All Post </option>
                                        <option>Post 1</option>
                                    </select>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class=" col-md-12 right-section   mb-4 ">
                <div class="card rounded-0 shadow-sm border-0">
                    <div class="card-body ">
                        <div class="clearfix"></div>
                        <div class="heading2 pb-2 border-bottom mb-4">Select Post </div>
                        <div class="mt-3">
                            <div class="form-row">
                                <div class=" col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="max-width: 70px;">Sr.No</th>
                                                    <th scope="col">Position Name</th>
                                                    <th scope="col"> Old Qualifications</th>
                                                    <th scope="col"> Remuneration</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>ANM - Sub Centre</td>
                                                    <td>Auxillary Nursing &amp; Midwifery Course and registered with any Nursing Council. Candidate has to apply for registration in Uttarakhand Nursing Council before joining the post, if selected.</td>
                                                    <td>12000, 14000, 16000 as per Accessible, Difficult and Most Difficult area (average approved is Rs 14,000)</td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>

                                                <tr>
                                                    <td>2</td>
                                                    <td>Staff Nurses - PHC/CHC/DH</td>
                                                    <td>
                                                        GNM/ B.Sc. Nursing/ Post Basic Nursing
                                                        and
                                                        Registered with any Nursing Council. Candidate has to apply for registration in Uttarakhand Nursing Council before joining the post, if selected.
                                                    </td>
                                                    <td>
                                                        15000, 17000, 19000 as per Accessible, Difficult and Most Difficult area (average approved is Rs 17,000). NCD Staff Nurses and other program specific Staff Nurses - Rs 15,000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        Community Nurse - NMHP
                                                    </td>
                                                    <td>
                                                        B. Sc. Nursing from a recognized institution with experience of 02 years of working in a hospital
                                                    </td>
                                                    <td>
                                                        17850
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        2nd ANM/ Female MPW/ Male MPW for HWC
                                                    </td>
                                                    <td>
                                                        Auxillary Nursing &amp; Midwifery Course and registered with any Nursing Council. Candidate has to apply for registration in Uttarakhand Nursing Council before joining the post, if selected.
                                                    </td>
                                                    <td>
                                                        12000, 14000, 16000 as per Accessible, Difficult and Most Difficult area (average approved is Rs 14,000)
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>



                                                <tr>
                                                    <td>
                                                        5
                                                    </td>
                                                    <td>
                                                        Laboratory Technicians - IDSP
                                                    </td>
                                                    <td>
                                                        <ol>
                                                            <li> Degree in Medical Laboratory Technology</li>OR <br>
                                                            <li>Diploma in Medical Lab Technology
                                                                <ul>
                                                                    <li> Should have completed 10+2 before obtaining diploma or degree</li>
                                                                    <li> The degree or diploma should be from a university/ institution recognized by the Central Govt or State Govt. </li>
                                                                    <li> Knowledge of Computers</li>
                                                                    <li> One year experience after degree/ diploma.</li>
                                                                    <li> The candidate should be registered with Uttarakhand Paramedical Medical Council/ Faculty, if applicable.</li>

                                                                </ul>
                                                            </li>
                                                        </ol>


                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        6
                                                    </td>
                                                    <td>
                                                        Pharmacist cum Store Keeper - RNTCP
                                                    </td>
                                                    <td>
                                                        Degree/ Diploma in Pharmacy from a recognized university and registered with State Pharmacy Council
                                                        <br>Preferential Qualification - 2 years experience in managing drug store in a reputed hospital/ health centre recognized by govt. Candidate should be well conversant with computer programming including MS Word, Excel and simple statistical packages.
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        7
                                                    </td>
                                                    <td>
                                                        Others - Xray Technician - Free Diagnostic
                                                    </td>
                                                    <td>
                                                        1. Two year diploma in X-Ray Technician having registration in paramedical council of Uttarakhand with one year of experience
                                                        <br>OR <br>
                                                        2. B. Sc. in imaging and registered with paramedical council of Uttarakhand.
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        8
                                                    </td>
                                                    <td>
                                                        Physiotherapist NPCDCS
                                                    </td>
                                                    <td>
                                                        Bachelor's degree in Physiotherapy (BPT) with at least 02 years experience of working in a hospital.
                                                    </td>
                                                    <td>
                                                        20000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        9
                                                    </td>
                                                    <td>
                                                        Dietician/ Nutritionist
                                                    </td>
                                                    <td>
                                                        Regular PG diploma/ Degree in Nutrition &amp; Dietetics from a recognized institute. <br /> Preference will be given to candidate - <br /> * having relevant experience in Nutrition and Dietetics <br /> * having higher qualification in Nutrition and Dietetics
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Para Medical Worker
                                                    </td>
                                                    <td></td>
                                                    <td></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        Obstetricians and Gynaecologists
                                                    </td>
                                                    <td>
                                                        MD (Gyane)/ MS (Gyane)/ DGO
                                                    </td>
                                                    <td>
                                                        100000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        Dental Surgeon
                                                    </td>
                                                    <td>
                                                        MDS from institution recognized by Dental Council of India
                                                        OR
                                                        BDS with two years of clinical experience in hospital/ institutional set up
                                                        Note - Preference will be given to MDS
                                                    </td>
                                                    <td>
                                                        40000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        11
                                                    </td>
                                                    <td>
                                                        Dental Hygienist
                                                    </td>
                                                    <td>
                                                        10+2 Science from Recognized Board. Diploma in Dental Hygienist Course from a Govt. recognized. Registration with State Dental Council. Experience: Two years of experience in a dental college/clinic
                                                    </td>
                                                    <td>
                                                        20000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        12
                                                    </td>
                                                    <td>
                                                        Dental Technician
                                                    </td>
                                                    <td>
                                                        10+2 Science from Recognized Board. Diploma in Dental Technician Course from a Govt. recognized. Registration with State Dental Council. Experience: Two years of experience in a dental college/clinic
                                                    </td>
                                                    <td>
                                                        10000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        13
                                                    </td>
                                                    <td>
                                                        MOs- AYUSH
                                                    </td>
                                                    <td>
                                                        MBBS/ AYUSH Graduate and registration with related State Medical Council. Preference will be given to the candidate having experience
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        14
                                                    </td>
                                                    <td>
                                                        Staff Nurse - RBSK (MHT)
                                                    </td>
                                                    <td>
                                                        GNM/ B.Sc. Nursing/ Post Basic Nursing
                                                        <br> and <br>
                                                        Registered with any Nursing Council. Candidate has to apply for registration in Uttarakhand Nursing Council before joining the post, if selected.
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        15
                                                    </td>
                                                    <td>
                                                        Pharmacists - RBSK (MHT)
                                                    </td>
                                                    <td>
                                                        B. Pharma/ D. Pharma from any recognized institute and registered with State Pharmacy Council
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        16
                                                    </td>
                                                    <td>
                                                        Staff Nurse - DEIC
                                                    </td>
                                                    <td>
                                                        GNM/ B.Sc. Nursing/ Post Basic Nursing
                                                        <br> and <br>
                                                        Registered with any Nursing Council. Candidate has to apply for registration in Uttarakhand Nursing Council before joining the post, if selected.
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        17
                                                    </td>
                                                    <td>
                                                        Physiotherapist
                                                    </td>
                                                    <td>
                                                        Bachelor's degree in Physiotherapy (BPT) with 02 years experience of working in a hospital.
                                                        <br>AND <br>
                                                        Registration in Uttarakhand Paramedical Council/ Faculty, if applicable in Uttarakhand
                                                    </td>
                                                    <td>
                                                        20000 (Rationalized)
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        18
                                                    </td>
                                                    <td>
                                                        Audiologist &amp; speech therapist
                                                    </td>
                                                    <td>
                                                        A bachelor in Audiology &amp; Speech language pathology/ B. Sc. in speech &amp; hearing from RCI recognized institute
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        19
                                                    </td>
                                                    <td>
                                                        Psychologist
                                                    </td>
                                                    <td>
                                                        Master's Degree in Child Psychology from any recognized university in India&nbsp;
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        20
                                                    </td>
                                                    <td>
                                                        Early interventionist cum special educator
                                                    </td>
                                                    <td>
                                                        &nbsp;MSc in Disability studies (Early Intervention) with basic degree in physiotherapy (BPT)/ Occupational therapy (BOT)/ Speech Language pathologist (ASLP)/ MBBS/ BAMS/BHMS. <br /> OR <br /> Post graduate Diploma in Early Intervention (PGDEI) with basic degree in physiotherapy <br /> (BPT)/ Occupational therapy (BOT)/ Speech Language pathologist (ASLP)/ MBBS. Essential: B.Ed. in Special Education in the field of Mental Retardation/ Diploma in Early Childhood Special Education (Mental Retardation)/ B.Ed. Special Education (Locomotor and Neurological Disorder)/ P.G. Diploma in Special Education (Mult. Dis.:Physical and Neuro.) recognized by Rehabilitation Council of India.
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        21
                                                    </td>
                                                    <td>
                                                        Lab technician - DEIC
                                                    </td>
                                                    <td>
                                                        Degree in Medical Laboratory Technology OR Diploma in Medical Lab Technology. Should have completed 10+2 before obtaining Degree or Diploma. The degree/ diploma should be from recognized university/ institution recognized by State Govt/ Central Govt. Minimum One year experience after degree/ diploma. Knowledge of computers. <br /> The candidate should be registered with any Paramedical Medical Council/Faculty, if applicable.
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        22
                                                    </td>
                                                    <td>
                                                        Dental technician
                                                    </td>
                                                    <td>
                                                        Passed 1 or 2 years course on Dental technician from a recognized institution. (Ref DEIC Operational Guidelines)
                                                    </td>
                                                    <td>
                                                        10000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        23
                                                    </td>
                                                    <td>
                                                        Counsellor - FP
                                                    </td>
                                                    <td>
                                                        Bachelors in Social Science/ Sociology/ Psychology/ related disciplines with minimum 2 years of relevant experience (Preference will be given to local candidate)
                                                    </td>
                                                    <td>
                                                        11000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        24
                                                    </td>
                                                    <td>
                                                        Counsellor - RKSK
                                                    </td>
                                                    <td>
                                                        Master&rsquo;s/ Bachelor&rsquo;s degree in Social Work/Psychology/Social Science
                                                        1-2 years&rsquo; work experience in public health, preferably in counselling
                                                        Good understanding of issues faced by young people/adolescents
                                                        Excellent interpersonal communication skills; capable of maintaining privacy and confidentiality; open, compassionate and willing to listen and engage young people; and is non-judgmental, with a progressive attitude
                                                        Can demonstrate a clear understanding of laws, policies and procedures pertaining to informed consent and confidentiality, contraceptive services, abortion, STI/HIV testing and treatment, substance abuse treatment, management of mental health and sexual abuse/domestic violence cases etc.
                                                        <br>Fluency in local languages-both writing and speaking.
                                                        <br> Good data management skills
                                                        Basic Computer skills, especially those related to MS Office.
                                                    </td>
                                                    <td>
                                                        11000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        25
                                                    </td>
                                                    <td>
                                                        Counsellor - Hbpathy
                                                    </td>
                                                    <td>
                                                        &nbsp;MSW from any recognized institution with two year experience in health sector and 6 months certificate course in Computers.
                                                    </td>
                                                    <td>
                                                        18000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        26
                                                    </td>
                                                    <td>
                                                        Psychologist/ Counsellor
                                                    </td>
                                                    <td>
                                                        Post-graduate degree in Psychology/MSW or Graduate in Psychology/ trained in counseling with two years of experience in the field of counseling services
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        28
                                                    </td>
                                                    <td>
                                                        Microbiologists - IDSP
                                                    </td>
                                                    <td>
                                                        Medical Graduate with Post Graduate Degree/ Diploma in Microbiology/ Virology/ Pathology/ other Lab Sciences
                                                        <br> OR <br>
                                                        M. Sc. in Medical Microbiology <br /> Preference will be given to the candidate with relevant experience in Medical Microbiology (Ref of advt for district level dated 07-12-17)
                                                    </td>
                                                    <td>
                                                        30000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        29
                                                    </td>
                                                    <td>
                                                        Audiometrician/ Audiologist
                                                    </td>
                                                    <td>
                                                        A bachelor in Audiology &amp; Speech language pathology/ B. Sc. (speech and hearing) from RCI recognized institute
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        Multi Rehabilitation worker
                                                    </td>
                                                    <td>
                                                        10+2 from any recognized Board and One and half year certificate course of Multi Rehabilitation worker from a recognized institute and Registered as Rehabilitation Personnel under Rehabilitation Council of India Act 1992. <br /> OR <br /> Bachelor's degree in Physiotherapy (BPT) with 02 years of experience of working in a hospital and Registration in Uttarakhand Paramedical Council/Faculty, if applicable in Uttarakhand
                                                    </td>
                                                    <td>
                                                        20000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        31
                                                    </td>
                                                    <td>
                                                        Social Worker - (Psychiatric)
                                                    </td>
                                                    <td>
                                                        Post graduate degree awarded after completion of course of study of minimum two years in mental health or psychiatric social work
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        32
                                                    </td>
                                                    <td>
                                                        Social Worker - (NTCP)
                                                    </td>
                                                    <td>
                                                        Post-graduate degree in Sociology/Social Work with two years of field experience.
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        33
                                                    </td>
                                                    <td>
                                                        TBHV - Medical College
                                                    </td>
                                                    <td>
                                                        Graduate in Science <br /> OR <br>
                                                        Intermediate (10 + 2) in Science and experience of working as MPW/LHV/ ANM/ Health worker / Certificate or higher course in Health Education / Counselling <br /> OR <br /> Tuberculosis health visitor&rsquo;s recognized course <br /> *Certificate course in computer operations (minimum two months)
                                                        Preferential Qualification &ndash; Training course for MPW or recognized sanitary inspector&rsquo;s course
                                                    </td>
                                                    <td>
                                                        13000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        34
                                                    </td>
                                                    <td>
                                                        Store Asstt &ndash; RNTCP (State Drug Store)
                                                    </td>
                                                    <td>
                                                        Intermediate (10+2) <br>
                                                        Preferential Qualification &ndash; Diploma in Pharmacy. Conversant with computer programming including MS Word, Excel and simple statistical packages.
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        35
                                                    </td>
                                                    <td>
                                                        Audiometric Asstt.
                                                    </td>
                                                    <td>
                                                        A Technical person with 1 year diploma in hearing, language and speech (DHLS) from a RCI recognized institute
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>

                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        36
                                                    </td>
                                                    <td>
                                                        Field Worker - Insect Collectors
                                                    </td>
                                                    <td>
                                                        Higher Secondary with Science. One year experience in Medical/ Biological Laboratory. Knowledge of computers.
                                                    </td>
                                                    <td>
                                                        10000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        37
                                                    </td>
                                                    <td>
                                                        Blood Bank Technician
                                                    </td>
                                                    <td>
                                                        &nbsp;1. Degree in Medical Laboratory Technology
                                                        <br> OR <br>
                                                        2. Diploma in Medical Lab Technology
                                                        <ul>
                                                            <li> Should have completed 10+2 before obtaining diploma or degree</li>
                                                            <li> The degree or diploma should be from a university/ institution recognized by the Central Govt or State Govt.
                                                            </li>
                                                            <li> Knowledge of Computers</li>
                                                            <li> One year experience after degree/ diploma.</li>
                                                        </ul>
                                                        The candidate should be registered with Uttarakhand Paramedical Medical Council/ Faculty, if applicable.

                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        38
                                                    </td>
                                                    <td>
                                                        Medical Records Asstt./ Case Registry Asstt.
                                                    </td>
                                                    <td>
                                                        Higher Secondary and knowledge of window based packages/ applications
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        39
                                                    </td>
                                                    <td>
                                                        Cold Chain Handler/ Refrigerator Mechanic
                                                    </td>
                                                    <td>
                                                        Secondary School examination pass
                                                        Diploma/ ITI in Mechanical or refrigeration from a recognized university/institution
                                                        Having Knowledge of refrigeration &amp; cold chain equipment.
                                                        Have at least 01 years experience in refrigeration.
                                                        Working Knowledge of MS office
                                                    </td>
                                                    <td>
                                                        12000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        40
                                                    </td>
                                                    <td>
                                                        District Programme Manager
                                                    </td>
                                                    <td>
                                                        &nbsp;Any Regular Graduate with MPH/MBA/MSW/PGDBM/Masters in Rural Development
                                                        Experience of working for at least five years at a position in Program Management in NHM at State/ District/ Block level. Preference will be given to the candidate who has worked as District Program Manager/ Block Program Manager
                                                    </td>
                                                    <td>
                                                        35000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        41
                                                    </td>
                                                    <td>
                                                        District Accounts Manager
                                                    </td>
                                                    <td>
                                                        &nbsp;Inter CA/ MBA (Finance)/ Inter - ICWA/ M. Com./ CFA with high level of proficiency in application of accounting software packages. Minimum 03 years of working experience in related field of accounts/ finance. Preference will be given to the candidate with work experience in National Health Mission/ health sector with government/ externally funded health projects/Ex-defense personnel with related experience/ management capabilities
                                                    </td>
                                                    <td>
                                                        30000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        42
                                                    </td>
                                                    <td>
                                                        District Data Manager
                                                    </td>
                                                    <td>
                                                        Science Graduate with M. Tech. (IT/CS) / MCA/ MSc. (CS). Working experience of two years of Software Development/ MIS/ Data Management and Networking. <br /> Preference will be give to the candidate having regular/ full time degree
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        43
                                                    </td>
                                                    <td>
                                                        Hospital Quality Manager
                                                    </td>
                                                    <td>
                                                        Science Graduate with PG Degree in Public Health/Health Management/Health &amp; Hospital Administration/ Hospital Management
                                                        <br>OR <br>
                                                        Science Graduate with two years diploma in Public Health/Health Management/Health &amp; Hospital Administration/ Hospital Management
                                                        Preference will be given to candidate - <br /> - Having Regular PG Degree/ Two years Diploma - Having experience in relevant field
                                                    </td>
                                                    <td>
                                                        30000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        44
                                                    </td>

                                                    <td>
                                                        District Level Manager - RBSK
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        45
                                                    </td>
                                                    <td>
                                                        DEIC Manager
                                                    </td>
                                                    <td>
                                                        Masters degree or Two year&rsquo;s diploma
                                                        in
                                                        Public Health/Health Management/Health &amp; Hospital Management/Hospital Management/ Hospital Administration <br /> OR <br /> Any MBA with 02 years of working experience in Health Sector
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        46
                                                    </td>
                                                    <td>
                                                        District &amp; Logistic Manager
                                                    </td>
                                                    <td>
                                                        Any Graduate with MBA in Supply Chain Mgt/ Health Care Mgt/ Materials Mgt/ Hospital Administration/ Health &amp; Hospital Mgt
                                                        <br> OR <br>
                                                        Any Graduate with Two year diploma in Supply Chain Mgt/ Health Care Mgt/ Materials Mgt/ Hospital Administration/ Health &amp; Hospital Mgt
                                                        Preference shall be given to candidate -
                                                        <br>* Having Regular/ Full time PG Degree or Diploma
                                                        <br>* Having experience of working in Program Management/ Project implementation and Management/ PSU
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        47
                                                    </td>
                                                    <td>
                                                        District Consultant - QA
                                                    </td>
                                                    <td>
                                                        Science Graduate with Post Graduate Degree in
                                                        Public Health/ Health Management/ Health and Hospital Administration/ Hospital Management
                                                        <br> OR <br>
                                                        Science Graduate with Two years diploma in
                                                        Public Health/ Health Management/ Health and Hospital Administration/ Hospital Management
                                                        Preference will be given to candidate -
                                                        <br> - Having Regular/ Full time PG Degree or Diploma
                                                        <br> - Having experience in relevant field
                                                    </td>
                                                    <td>
                                                        35000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        48
                                                    </td>
                                                    <td>
                                                        Program Officer - RKSK
                                                    </td>
                                                    <td>
                                                        Any Graduate with MBA in Health Care Management/ Hospital Administration/ Health &amp; Hospital Management/ Public Health
                                                        <br> OR <br>
                                                        Any Graduate with Two year&rsquo;s PG Diploma in Health Care Management/ Hospital Administration/ Health &amp; Hospital Management/ Public Health
                                                        Preference will be given to candidate -
                                                        <br> - Having Regular/ Full time PG Degree or Diploma
                                                        <br> - Having experience of working in Program Management/ Projection implementation and Management/ PSU
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        49
                                                    </td>
                                                    <td>
                                                        Program Officer - MCH
                                                    </td>
                                                    <td>
                                                        Any Graduate with MBA in Health Care Management/ Hospital Administration/ Health &amp; Hospital Management/ Public Health
                                                        <br> OR <br>
                                                        Any Graduate with Two year&rsquo;s PG Diploma in Health Care Management/ Hospital Administration/ Health &amp; Hospital Management/ Public Health
                                                        Preference will be given to candidate -
                                                        <br> - Having Regular/ Full time PG Degree or Diploma
                                                        <br> - Having experience of working in Program Management/ Projection implementation and Management/ PSU
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        50
                                                    </td>
                                                    <td>
                                                        Regional Program Assistant - Quality
                                                    </td>
                                                    <td>
                                                        Recognized Graduate Degree with fluency in MS Office package with one year of experience of managing office and providing support to Health Programme/ NRHM. Knowledge of Accountancy would be an added advantage. Candidates having drafting skills would be preferred. (from guidelines)
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        51
                                                    </td>
                                                    <td>
                                                        Executive Assistant
                                                    </td>
                                                    <td>
                                                        Recognized Graduate Degree with fluency in MS Office package with one year of experience of managing office and providing support to Health Programme/ NRHM. Knowledge of Accountancy would be an added advantage. Candidates having drafting skills would be preferred. (from guidelines)
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        52
                                                    </td>
                                                    <td>
                                                        District Coordinator - PCPNDT
                                                    </td>
                                                    <td>
                                                        Any Graduate with MBA
                                                        Graduate and Post Graduate degree must be regular full time.
                                                        Proficiency in use of MS - Office
                                                        Knowledge of written and typing skills in English
                                                        Candidate should have good managerial and communication skills. Preference shall be given to the candidate -
                                                        <br> Having experience of working in Program Management/ Project Management/ PSU
                                                        Certification in project management Year 2016
                                                    </td>
                                                    <td>
                                                        20000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        53
                                                    </td>
                                                    <td>
                                                        Field Supervisor
                                                    </td>
                                                    <td>
                                                        i) Graduate preferably in Sociology, Psychology or Social work. <br /> ii) Have at least 01 years experience in similar work. <br /> iii) Working Knowledge of MS office <br /> iv) Should have personal transport with valid driving license. <br /> v) Preferred Skills/Experience: Computer, Communication, problem solving, team building, prior work experience in Social work, NGO, community development activities, and health services etc. Prior experience in similar work and experience, if any will be given weightage. Year 2018
                                                    </td>
                                                    <td>
                                                        12000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        54
                                                    </td>
                                                    <td>
                                                        District Community Mobilizer - ASHA
                                                    </td>
                                                    <td>
                                                        Master&rsquo;s degree in social work or any of the social sciences.
                                                        At least 2-3years experience in management/coordination of community health programmes or community mobilization or related field activities with a minimum of 1 years experience in health sector. Year 2018
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        55
                                                    </td>
                                                    <td>
                                                        IEC - BCC - BCC Facilitator
                                                    </td>
                                                    <td>
                                                        Graduate/degree or diploma in mass communication with at least 03 years of experience in the field of communication/community health work.
                                                        The candidates must have working knowledge of computer software like MS office, Corel Draw &amp; Photoshop etc. Year 2018
                                                    </td>
                                                    <td>
                                                        20000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        56
                                                    </td>
                                                    <td>
                                                        District Epidemiologist
                                                    </td>
                                                    <td>
                                                        Science Graduate With Post Graduate Degree in Epidemiology/Public Health/Health Management/Health and Hospital Administration/Hospital Management OR <br /> Science Graduate With Two years diploma in Public Health//Health Management/Health and Hospital Administration/Hospital Management <br /> -Preference will be given to candidate- - Having regular/full time Post Graduate Degree or Two year's Diploma -Having experience in relevant field Year 2017
                                                    </td>
                                                    <td>
                                                        35000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        57
                                                    </td>
                                                    <td>
                                                        District Data Manager - IDSP
                                                    </td>
                                                    <td>
                                                        Science Graduate
                                                        With
                                                        M. Tech (IT/ CS)/ MCA/ M. Sc. (CS)
                                                        Working experience of two years of software development/ MIS/ Data Management and networking. Graduate and Post Graduate degree must be regular/ full time. Year 2017
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        58
                                                    </td>
                                                    <td>
                                                        District VBD Consultant
                                                    </td>
                                                    <td>
                                                        MSC. Zoology/ Life Science <br /> with <br /> Specialization in Entomology <br /> Preference will be given to the candidate - <br /> Having experience of working in the field of Entomology
                                                    </td>
                                                    <td>
                                                        35000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        59
                                                    </td>
                                                    <td>
                                                        District Program Coordinator - RNTCP
                                                    </td>
                                                    <td>
                                                        Any Graduate with MBA in Health Care Management/ Hospital Administration/ Health &amp; Hospital Management/ Public Health <br /> OR <br /> Any Graduate with Two year PG diploma in Health Care Management/ Hospital Administration/ Health &amp; Hospital Management/ Public Health <br /> Preference shall be given to candidate - <br /> * Having Regular/ Full time Post Graduate Degree or Two year PG Diploma <br /> * Having experience of working in Program Management/ Project implementation and Management/ PSU&nbsp;Year 2018
                                                    </td>
                                                    <td>
                                                        22000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        60
                                                    </td>
                                                    <td>
                                                        Sr. DOTS plus TB HIV Supervisor
                                                    </td>
                                                    <td>
                                                        &nbsp;As per latest guidelines
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        61
                                                    </td>
                                                    <td>
                                                        STS
                                                    </td>
                                                    <td>
                                                        &nbsp;As per latest guidelines
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        62
                                                    </td>
                                                    <td>
                                                        STLS
                                                    </td>
                                                    <td>
                                                        &nbsp;As per latest guidelines
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        63
                                                    </td>
                                                    <td>
                                                        Accountant (RNTCP)
                                                    </td>
                                                    <td>
                                                        &nbsp;As per latest guidelines
                                                    </td>
                                                    <td>
                                                        10000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        64
                                                    </td>
                                                    <td>
                                                        Monitoring &amp; Evaluation Officer
                                                    </td>
                                                    <td>
                                                        MBA/ PG Diploma <br /> in <br /> Management/ Health Administration/ Hospital Administration from a recognized institute/ university <br /> Preference will be given to the candidate- <br /> * Having Regular PG Degree/ Diploma <br /> * who has worked in the field of development/ health sector at district/ state level
                                                    </td>
                                                    <td>
                                                        25000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        65
                                                    </td>
                                                    <td>
                                                        District NTCP Consultant
                                                    </td>
                                                    <td>
                                                        Science Graduate with Post Graduate Degree in <br /> Public Health/ Health Management/ Health and Hospital Administration/ Hospital Management <br /> OR <br /> Science Graduate with Two years diploma in <br /> Public Health/ Health Management/ Health and Hospital Administration/ Hospital Management <br /> Preference will be given to candidate - <br /> - Having Regular/ Full time PG Degree or Diploma <br /> - Having experience in relevant field
                                                    </td>
                                                    <td>
                                                        35000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        66
                                                    </td>
                                                    <td>
                                                        Finance cum Logistic Consultant
                                                    </td>
                                                    <td>
                                                        B. Com <br /> with <br /> M. Com./ MBA (Finance) from recognized institute or university <br /> B. Com. must be Regular/ Full time <br /> Candidate must have - <br /> * At least 04 years of working experience in financial budgeting, accounting, reporting and fund flow management etc. <br /> Preference will be given to the candidate who has relevant experience of working in Govt Organization/ Govt Projects/ PSUs/ Govt Programs etc.
                                                    </td>
                                                    <td>
                                                        30000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        67
                                                    </td>
                                                    <td>
                                                        Block Programme Manager
                                                    </td>
                                                    <td>
                                                        Any Graduate with MBA <br /> Preference shall be given to candidate - <br /> * Having Regular/ Full time Post Graduate Degree or Two year's Diploma <br /> * Having experience of working in Program Management/ Project implementation and Management/ PSU
                                                    </td>
                                                    <td>
                                                        16000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        68
                                                    </td>
                                                    <td>
                                                        Block Accounts Manager
                                                    </td>
                                                    <td>
                                                        Graduation in Commerce <br /> Two years of experience in maintenance of accounts on double entry system in a reputed organization. <br /> Preference will be given to candidate - <br /> * Having Regular/ Full time Degree <br /> * M. Com. OR MBA (Finance) OR PGDBM (Finance) <br /> * Familiarity with audit in a recognized society or institute
                                                    </td>
                                                    <td>
                                                        14000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        69
                                                    </td>
                                                    <td>
                                                        Block Coordinator - ASHA
                                                    </td>
                                                    <td>
                                                        Bachelor&rsquo;s degree in social work or any of the social sciences.
                                                    </td>
                                                    <td>
                                                        10000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        70
                                                    </td>
                                                    <td>
                                                        Nurse Trainer - Skill Lab
                                                    </td>
                                                    <td>
                                                        M. Sc. (Nursing) <br /> OR <br /> B. Sc. (Nursing) with at least 03 years of work experience in clinical field in maternal and newborn health or the skills lab with clinical training experience <br /> Preference will be given to the candidate having experience of providing technical assistance/ consultancy/ teaching experience in any of related programs like in Skilled Birth Attendance/ Labour Room/ Newborn/ Child Health/ Family Planning/ SNCU/ Educational or Clinical Training Programs
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        71
                                                    </td>
                                                    <td>
                                                        Nursing Tutor
                                                    </td>
                                                    <td>
                                                        B.Sc. Nursing (Basic/Post Basic) or GNM with Diploma in Nursing Education &amp; Administration /Diploma in Public Health Nursing
                                                        Experience: 2 years of clinical working experience
                                                        Technical knowledge and field experience in Nursing / Midwifery Education focusing on Skilled Birth Attendance, IMNCI and Family Planning from guidelines
                                                    </td>
                                                    <td>
                                                        20000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        72
                                                    </td>
                                                    <td>
                                                        Program Associate
                                                    </td>
                                                    <td>
                                                        Graduate in any discipline.
                                                        1 year Diploma in Computer Application.
                                                        Excellent command over MS Office &amp; Internet. Computer Typing speed of minimum 40 words per minute in English and 30 words per minute in Hindi. Good communication and writing skill in English &amp; Hindi.&nbsp;
                                                        Minimum 2 years of relevant experience as Computer/Data Entry Operator.
                                                        Preference will be given to the female candidates and those who have teaching experience from guidelines
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        73
                                                    </td>
                                                    <td>
                                                        OT Technician
                                                    </td>
                                                    <td>
                                                        Diploma in Operation Theatre Technology. Registered with Uttarakhand Paramedical Council, if applicable in the state of Uttarakhand. One year relevant experience
                                                    </td>
                                                    <td>
                                                        15000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        74
                                                    </td>
                                                    <td>
                                                        Sanitary Attendant
                                                    </td>
                                                    <td>
                                                        Matriculation. At least 2 years experience of working in a hospital as per guidelines
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        75
                                                    </td>
                                                    <td>
                                                        Hospital Attendant
                                                    </td>
                                                    <td>
                                                        Matriculation. At least 2 years experience of working in a hospital as per guidelines
                                                    </td>
                                                    <td></td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        76
                                                    </td>
                                                    <td>
                                                        DR TB Statistical Assistant
                                                    </td>
                                                    <td>
                                                        Graduate in any discipline with diploma in computer applications or equivalent recognized by the council for technical education or DOE ACC. Typing speed of 40 WPM in English and in local language &ndash; as per guidelines 2021
                                                    </td>
                                                    <td>
                                                        19000
                                                    </td>
                                                    <td><button type="button" class="btn btn-primary">Apply</button> </td>
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
            <!--	Intro  section end-->
        </div>
    </div>
</div>
<!-- End   -->
@endsection

@section('scripts')

@endsection