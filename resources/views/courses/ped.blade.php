<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PEDyearIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#PEDyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PEDyearIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#PEDyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PEDyearIIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#PEDyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#PEDyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5" wfd-id="2"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11101') }} </th>
                        <td> PED 11101 </td>
                        <td> Foundation of Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11102') }} </th>
                        <td> PED 11102 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11103') }} </th>
                        <td> PED 11103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Track Events) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11104') }} </th>
                        <td> PED 11104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Gymnastics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11105') }} </th>
                        <td> PED 11105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Swimming & Life Saving </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11106') }} </th>
                        <td> PED 11106 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Basketball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11107') }} </th>
                        <td> PED 11107 </td>
                        <td> Fundamental Motor Skills and Practices of Games </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11308') }} </th>
                        <td> PED 11308 </td>
                        <td> Systemic Anatomy & Basic Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11209') }} </th>
                        <td> PED 11209 </td>
                        <td> Fundamentals of Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 11210') }} </th>
                        <td> PED 11210 </td>
                        <td> Introduction to Information Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 1101') }} </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12001') }} </th>
                        <td> PED 12001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12102') }} </th>
                        <td> PED 12102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events -Jumps) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12103') }} </th>
                        <td> PED 12103  </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Badminton </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12104') }} </th>
                        <td> PED 12104 </td>
                        <td>  Movement Concept, Skill Analysis, Performance and Practices in Netball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12105') }} </th>
                        <td> PED 12105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Volleyball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12206') }} </th>
                        <td> PED 12206 </td>
                        <td> Basics of Education Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12207') }} </th>
                        <td> PED 12207 </td>
                        <td> Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12308') }} </th>
                        <td> PED 12308 </td>
                        <td> Introduction to General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12209') }} </th>
                        <td> PED 12209 </td>
                        <td> History of Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12110') }} </th>
                        <td> PED 12110 </td>
                        <td> Aerobics and Rhythmic Activities </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 12211') }} </th>
                        <td> PED 12211 </td>
                        <td> Applications of Information Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 1201') }} </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21001') }} </th>
                        <td> PED 21001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21102') }} </th>
                        <td> PED 21102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events -Throws) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21103') }} </th>
                        <td> PED 21103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Elle </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21104') }} </th>
                        <td> PED 21104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Karate </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21105') }} </th>
                        <td> PED 21105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21206') }} </th>
                        <td> PED 21206 </td>
                        <td> Practicum – Level I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21207') }} </th>
                        <td> PED 21207 </td>
                        <td> Basic Statistics and Introduction to Statistical Software </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21208') }} </th>
                        <td> PED 21208 </td>
                        <td> Sport Biomechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21209') }} </th>
                        <td> PED 21209 </td>
                        <td> Exercise Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21210') }} </th>
                        <td> PED 21210 </td>
                        <td> Education Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21211') }} </th>
                        <td> PED 21211 </td>
                        <td> Safety and Injury Prevention </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21112') }} </th>
                        <td> PED 21112 </td>
                        <td> German Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21113') }} </th>
                        <td> PED 21113 </td>
                        <td> Spanish Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 21114') }} </th>
                        <td> PED 21114 </td>
                        <td> Chinese Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 2101') }} </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22001') }} </th>
                        <td> PED 22001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22102') }} </th>
                        <td> PED 22102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Cricket </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22103') }} </th>
                        <td> PED 22103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Rugby </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22104') }} </th>
                        <td> PED 22104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Judo </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22105') }} </th>
                        <td> PED 22105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Table Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22106') }} </th>
                        <td> PED 22106 </td>
                        <td> Comparative Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22207') }} </th>
                        <td> PED 22207 </td>
                        <td> Practicum – Level II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22208') }} </th>
                        <td> PED 22208 </td>
                        <td> Physical Education in Pre-school & Primary Schools </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22209') }} </th>
                        <td> PED 22209 </td>
                        <td> Sport Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22110') }} </th>
                        <td> PED 22110 </td>
                        <td> Dance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22311') }} </th>
                        <td> PED 22311 </td>
                        <td> Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22212') }} </th>
                        <td> PED 22212 </td>
                        <td> Statistics for Data Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22113') }} </th>
                        <td> PED 22113 </td>
                        <td> German Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22114') }} </th>
                        <td> PED 22114 </td>
                        <td> Spanish Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 22115') }} </th>
                        <td> PED 22115 </td>
                        <td> Chinese Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'CPE 2201') }} </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31001') }} </th>
                        <td> PED 31001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31102') }} </th>
                        <td> PED 31102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Hockey </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31103') }} </th>
                        <td> PED 31103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Baseball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31104') }} </th>
                        <td> PED 31104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Soccer </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31105') }} </th>
                        <td> PED 31105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Weight Lifting </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31206') }} </th>
                        <td> PED 31206 </td>
                        <td> Physical Education in Secondary & Tertiary Institutions </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31207') }} </th>
                        <td> PED 31207 </td>
                        <td> Practicum – Level III </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31208') }} </th>
                        <td> PED 31208 </td>
                        <td> Advanced Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31209') }} </th>
                        <td> PED 31209 </td>
                        <td> Sport Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31210') }} </th>
                        <td> PED 31210 </td>
                        <td> Curriculum Perspective and Issues in Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 31211') }} </th>
                        <td> PED 31211 </td>
                        <td> Test, Measurement & Evaluation of Physical Activity </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32001') }} </th>
                        <td> PED 32001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32202') }} </th>
                        <td> PED 32202 </td>
                        <td> Specialization of a Selected Sport – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32203') }} </th>
                        <td> PED 32203 </td>
                        <td> Practicum – Level IV </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32204') }} </th>
                        <td> PED 32204 </td>
                        <td> Sociology of Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32205') }} </th>
                        <td> PED 32205 </td>
                        <td> Sport and Education Law </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32106') }} </th>
                        <td> PED 32106 </td>
                        <td> Sport Facility Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32207') }} </th>
                        <td> PED 32207 </td>
                        <td> Management Process in Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32208') }} </th>
                        <td> PED 32208 </td>
                        <td> Research Methodology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32109') }} </th>
                        <td> PED 32109 </td>
                        <td> Sport Education Model & Game Sense Approach </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32210') }} </th>
                        <td> PED 32210 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32211') }} </th>
                        <td> PED 32211 </td>
                        <td> Strength and Conditioning </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32112') }} </th>
                        <td> PED 32112 </td>
                        <td> Success in Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 32113') }} </th>
                        <td> PED 32113 </td>
                        <td> Guidance and Counseling </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="PEDyearIVsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41201') }} </th>
                        <td> PED 41201 </td>
                        <td> Specialization of a Selected Sport – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41202') }} </th>
                        <td> PED 41202 </td>
                        <td> Health & Health Behavior </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41203') }} </th>
                        <td> PED 41203 </td>
                        <td> Outdoor Recreations and Leadership </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41204') }} </th>
                        <td> PED 41204 </td>
                        <td> Adaptive Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41105') }} </th>
                        <td> PED 41105 </td>
                        <td> Science of Yoga and Relaxation </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41206') }} </th>
                        <td> PED 41206 </td>
                        <td> Community Service Project </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41207') }} </th>
                        <td> PED 41207 </td>
                        <td> Sport Therapy </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41108') }} </th>
                        <td> PED 41108 </td>
                        <td> Professional Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41109') }} </th>
                        <td> PED 41109 </td>
                        <td> Reflective Practice in Physical Education </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41210') }} </th>
                        <td> PED 41210 </td>
                        <td> Long Term Athlete Development (LTAD) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41111') }} </th>
                        <td> PED 41111 </td>
                        <td> Olympism </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41112') }} </th>
                        <td> PED 41112 </td>
                        <td> International Politics & Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41113') }} </th>
                        <td> PED 41113 </td>
                        <td> Traditional Sports in Sri Lanka </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41114') }} </th>
                        <td> PED 41114 </td>
                        <td> Drugs and Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'PED 41115') }} </th>
                        <td> PED 41115 </td>
                        <td> Sport Administration Structure </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>