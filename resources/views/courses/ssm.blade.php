<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SSMyearIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#SSMyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SSMyearIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#SSMyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SSMyearIIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#SSMyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SSMyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="SSMyearIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11101') }} </th>
                        <td> SSM 11101 </td>
                        <td> Foundations of Sport Sciences and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11102') }} </th>
                        <td> SSM 11102 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11103') }} </th>
                        <td> SSM 11103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Track Events) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11104') }} </th>
                        <td> SSM 11104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Gymnastics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11105') }} </th>
                        <td> SSM 11105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Swimming & Life Saving </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11106') }} </th>
                        <td> SSM 11106 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Basketball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11107') }} </th>
                        <td> SSM 11107 </td>
                        <td> Fundamental Motor Skills and Practices of Games </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11208') }} </th>
                        <td> SSM 11208 </td>
                        <td> Systemic Anatomy and Physiology – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11209') }} </th>
                        <td> SSM 11209 </td>
                        <td> Basic Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11210') }} </th>
                        <td> SSM 11210 </td>
                        <td> Introduction to Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 11211') }} </th>
                        <td> SSM 11211 </td>
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
    <div role="tabpanel" class="tab-pane" id="SSMyearIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12001') }} </th>
                        <td> SSM 12001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12102') }} </th>
                        <td> SSM 12102 </td>
                        <td> Aerobics and Rhythmic Activities </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12103') }} </th>
                        <td> SSM 12103  </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events-Jumps) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12104') }} </th>
                        <td> SSM 12104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Badminton </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12105') }} </th>
                        <td> SSM 12105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Netball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 2106') }} </th>
                        <td> SSM 2106 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Volleyball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12107') }} </th>
                        <td> SSM 12107 </td>
                        <td> Basic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12208') }} </th>
                        <td> SSM 12208 </td>
                        <td> Systemic Anatomy & Physiology – Part II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12209') }} </th>
                        <td> SSM 12209 </td>
                        <td> Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12310') }} </th>
                        <td> SSM 12310 </td>
                        <td> Basic Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 12211') }} </th>
                        <td> SSM 12211 </td>
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
    <div role="tabpanel" class="tab-pane" id="SSMyearIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21001') }} </th>
                        <td> SSM 21001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21102') }} </th>
                        <td> SSM 21102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events-Throws) </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21103') }} </th>
                        <td> SSM 21103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Elle </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21104') }} </th>
                        <td> SSM 21104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Karate </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21105') }} </th>
                        <td> SSM 21105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21106') }} </th>
                        <td> SSM 21106 </td>
                        <td> Sports Massage Therapy </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21207') }} </th>
                        <td> SSM 21207 </td>
                        <td> Introduction to Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21208') }} </th>
                        <td> SSM 21208 </td>
                        <td> Introduction to Biomechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21209') }} </th>
                        <td> SSM 21209 </td>
                        <td> Basic Statistics & Introduction to Statistical Software </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21210') }} </th>
                        <td> SSM 21210 </td>
                        <td> Exercise Biochemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21211') }} </th>
                        <td> SSM 21211 </td>
                        <td> Exercise Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21112') }} </th>
                        <td> SSM 21112 </td>
                        <td> German Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21113') }} </th>
                        <td> SSM 21113 </td>
                        <td> Spanish Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 21114') }} </th>
                        <td> SSM 21114 </td>
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
    <div role="tabpanel" class="tab-pane" id="SSMyearIIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22001') }} </th>
                        <td> SSM 22001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22102') }} </th>
                        <td> SSM 22102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Cricket </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22103') }} </th>
                        <td> SSM 22103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Rugby </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22104') }} </th>
                        <td> SSM 22104 </td>
                        <td>  Movement Concept, Skill Analysis, Performance and Practices in Judo </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22105') }} </th>
                        <td> SSM 22105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Table Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22206') }} </th>
                        <td> SSM 22206 </td>
                        <td> Sport Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22307') }} </th>
                        <td> SSM 22307 </td>
                        <td> Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22208') }} </th>
                        <td> SSM 22208 </td>
                        <td> Sport Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22209') }} </th>
                        <td> SSM 22209 </td>
                        <td> Statistics for Data Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22210') }} </th>
                        <td> SSM 22210 </td>
                        <td> Sports Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22111') }} </th>
                        <td> SSM 22111 </td>
                        <td> German Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22112') }} </th>
                        <td> SSM 22112 </td>
                        <td> Spanish Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 22113') }} </th>
                        <td> SSM 22113 </td>
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
    <div role="tabpanel" class="tab-pane" id="SSMyearIIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31001') }} </th>
                        <td> SSM 31001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31102') }} </th>
                        <td> SSM 31102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Hockey </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31103') }} </th>
                        <td> SSM 31103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Baseball </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31104') }} </th>
                        <td> SSM 31104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Soccer </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31105') }} </th>
                        <td> SSM 31105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Weight Lifting </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31206') }} </th>
                        <td> SSM 31206 </td>
                        <td> Practicum </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31207') }} </th>
                        <td> SSM 31207 </td>
                        <td> Advanced Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31208') }} </th>
                        <td> SSM 31208 </td>
                        <td> Sport Medicine & Injury Prevention </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31209') }} </th>
                        <td> SSM 31209 </td>
                        <td> Outdoor Recreation & Leadership </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31210') }} </th>
                        <td> SSM 31210 </td>
                        <td> Sport Biomechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31211') }} </th>
                        <td> SSM 31211 </td>
                        <td> Musculoskeletal Anatomy & Kinesiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31112') }} </th>
                        <td> SSM 31112 </td>
                        <td> Women and Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31113') }} </th>
                        <td> SSM 31113 </td>
                        <td> Mathematical Applications in Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31114') }} </th>
                        <td> SSM 31114 </td>
                        <td> Health, Wellness & Lifelong Physical Activities </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 31115') }} </th>
                        <td> SSM 31115 </td>
                        <td> Sport Tourism </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SSMyearIIIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32001') }} </th>
                        <td> SSM 32001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32202') }} </th>
                        <td> SSM 32202 </td>
                        <td> Specialization of a Selected Sport – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32203') }} </th>
                        <td> SSM 32203 </td>
                        <td> Advanced Practicum </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32204') }} </th>
                        <td> SSM 32204 </td>
                        <td> Research Methodology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32205') }} </th>
                        <td> SSM 32205 </td>
                        <td> Sociology of Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32106') }} </th>
                        <td> SSM 32106 </td>
                        <td> Guidance and Counseling </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32207') }} </th>
                        <td> SSM 32207 </td>
                        <td> Sport Law </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32208') }} </th>
                        <td> SSM 32208 </td>
                        <td> Sport Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32209') }} </th>
                        <td> SSM 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32110') }} </th>
                        <td> SSM 32110 </td>
                        <td> Test and Measurements </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32111') }} </th>
                        <td> SSM 32111 </td>
                        <td> Success in Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32112') }} </th>
                        <td> SSM 32112 </td>
                        <td> Sport Education Model & Game Sense Approach </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM32213') }} </th>
                        <td> SSM32213 </td>
                        <td> Strength and Conditioning </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 32214') }} </th>
                        <td> SSM 32214 </td>
                        <td> Sport Journalism </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="SSMyearIVsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41201') }} </th>
                        <td> SSM 41201 </td>
                        <td> Specialization of a Selected Sport – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41102') }} </th>
                        <td> SSM 41102 </td>
                        <td> Sport Facility Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41203') }} </th>
                        <td> SSM 41203 </td>
                        <td> Accounting and Financial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41204') }} </th>
                        <td> SSM 41204 </td>
                        <td> Risk Management and Sport Safety </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41205') }} </th>
                        <td> SSM 41205 </td>
                        <td> Sport Marketing </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41106') }} </th>
                        <td> SSM 41106 </td>
                        <td> Sport Administration Structure </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41107') }} </th>
                        <td> SSM 41107 </td>
                        <td> Comparative Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41208') }} </th>
                        <td> SSM 41208 </td>
                        <td> Community Service Project </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41109') }} </th>
                        <td> SSM 41109 </td>
                        <td> Professional Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41110') }} </th>
                        <td> SSM 41110 </td>
                        <td> Sports for differently abled Persons </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41111') }} </th>
                        <td> SSM 41111 </td>
                        <td> Event management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41112') }} </th>
                        <td> SSM 41112 </td>
                        <td> Traditional Sports in Sri Lanka </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41113') }} </th>
                        <td> SSM 41113 </td>
                        <td> Sport Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41214') }} </th>
                        <td> SSM 41214 </td>
                        <td> Teaching Practice </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'SSM 41215') }} </th>
                        <td> SSM 41215 </td>
                        <td> Long Term Athlete / Player Development (LTAD) </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>