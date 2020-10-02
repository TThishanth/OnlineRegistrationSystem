<script>
    /* Year I Semester I */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIsemesterI").click(function(){
            $("#academicForm #SSMyearIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year II Semester I */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIIsemesterI").click(function(){
            $("#academicForm #SSMyearIIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year III Semester I */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIIIsemesterI").click(function(){
            $("#academicForm #SSMyearIIIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year IV Semester I */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIVsemesterI").click(function(){
            $("#academicForm #SSMyearIVsemesterI").prop('checked',this.checked);
        });
    });

</script> 

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemSSMyearIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemSSMyearIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemSSMyearIIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemSSMyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemSSMyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5" wfd-id="2"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11101" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11101 </td>
                        <td> Foundations of Sport Sciences and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11102" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11102 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11103" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Track Events) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11104" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Gymnastics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11105" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Swimming & Life Saving </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11106" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11106 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Basketball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11107" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11107 </td>
                        <td> Fundamental Motor Skills and Practices of Games </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11208" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11208 </td>
                        <td> Systemic Anatomy and Physiology – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11209" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11209 </td>
                        <td> Basic Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11210" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11210 </td>
                        <td> Introduction to Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 11211" id="SSMyearIsemesterI"> </th>
                        <td> SSM 11211 </td>
                        <td> Introduction to Information Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 1101" id="SSMyearIsemesterI"> </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemSSMyearIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21001" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21102" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events-Throws) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21103" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Elle </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21104" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Karate </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21105" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21106" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21106 </td>
                        <td> Sports Massage Therapy </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21207" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21207 </td>
                        <td> Introduction to Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21208" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21208 </td>
                        <td> Introduction to Biomechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21209" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21209 </td>
                        <td> Basic Statistics & Introduction to Statistical Software </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21210" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21210 </td>
                        <td> Exercise Biochemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21211" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21211 </td>
                        <td> Exercise Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21112" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21112 </td>
                        <td> German Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21113" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21113 </td>
                        <td> Spanish Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 21114" id="SSMyearIIsemesterI"> </th>
                        <td> SSM 21114 </td>
                        <td> Chinese Language – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 2101" id="SSMyearIIsemesterI"> </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemSSMyearIIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31001" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31102" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Hockey </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31103" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Baseball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31104" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Soccer </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31105" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Weight Lifting </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31206" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31206 </td>
                        <td> Practicum </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31207" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31207 </td>
                        <td> Advanced Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31208" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31208 </td>
                        <td> Sport Medicine & Injury Prevention </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31209" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31209 </td>
                        <td> Outdoor Recreation & Leadership </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31210" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31210 </td>
                        <td> Sport Biomechanics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31211" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31211 </td>
                        <td> Musculoskeletal Anatomy & Kinesiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31112" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31112 </td>
                        <td> Women and Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31113" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31113 </td>
                        <td> Mathematical Applications in Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31114" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31114 </td>
                        <td> Health, Wellness & Lifelong Physical Activities </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 31115" id="SSMyearIIIsemesterI"> </th>
                        <td> SSM 31115 </td>
                        <td> Sport Tourism </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemSSMyearIVsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIVsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41201" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41201 </td>
                        <td> Specialization of a Selected Sport – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41102" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41102 </td>
                        <td> Sport Facility Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41203" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41203 </td>
                        <td> Accounting and Financial Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41204" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41204 </td>
                        <td> Risk Management and Sport Safety </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41205" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41205 </td>
                        <td> Sport Marketing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41106" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41106 </td>
                        <td> Sport Administration Structure </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41107" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41107 </td>
                        <td> Comparative Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41208" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41208 </td>
                        <td> Community Service Project </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41109" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41109 </td>
                        <td> Professional Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41110" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41110 </td>
                        <td> Sports for differently abled Persons </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41111" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41111 </td>
                        <td> Event management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41112" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41112 </td>
                        <td> Traditional Sports in Sri Lanka </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41113" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41113 </td>
                        <td> Sport Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41214" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41214 </td>
                        <td> Teaching Practice </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="SSM 41215" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 41215 </td>
                        <td> Long Term Athlete / Player Development (LTAD) </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>