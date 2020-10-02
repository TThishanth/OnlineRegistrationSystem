<script>
    /* Year I Semester II */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIsemesterII").click(function(){
            $("#academicForm #SSMyearIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year II Semester II */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIIsemesterII").click(function(){
            $("#academicForm #SSMyearIIsemesterII").prop('checked',this.checked);
        });
    });

    /* Year III Semester II */
    $(document).ready(function(){
        $("#academicForm #selectSSMyearIIIsemesterII").click(function(){
            $("#academicForm #SSMyearIIIsemesterII").prop('checked',this.checked);
        });
    });
</script> 

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemSSMyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemSSMyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemSSMyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemSSMyearIVsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemSSMyearIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12001" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12102" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12102 </td>
                        <td> Aerobics and Rhythmic Activities </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12103" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12103  </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Athletics (Field Events-Jumps) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12104" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Badminton </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12105" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Netball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 2106" id="SSMyearIsemesterII"> </th>
                        <td> SSM 2106 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Volleyball </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12107" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12107 </td>
                        <td> Basic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12208" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12208 </td>
                        <td> Systemic Anatomy & Physiology – Part II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12209" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12209 </td>
                        <td> Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12310" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12310 </td>
                        <td> Basic Physics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 12211" id="SSMyearIsemesterII"> </th>
                        <td> SSM 12211 </td>
                        <td> Applications of Information Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 1201" id="SSMyearIsemesterII"> </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemSSMyearIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22001" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22102" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22102 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Cricket </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22103" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22103 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Rugby </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22104" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22104 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Judo </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22105" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22105 </td>
                        <td> Movement Concept, Skill Analysis, Performance and Practices in Table Tennis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22206" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22206 </td>
                        <td> Sport Psychology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22307" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22307 </td>
                        <td> Theory and Methodology of Sports Training </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22208" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22208 </td>
                        <td> Sport Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22209" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22209 </td>
                        <td> Statistics for Data Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22210" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22210 </td>
                        <td> Sports Physiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22111" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22111 </td>
                        <td> German Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22112" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22112 </td>
                        <td> Spanish Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 22113" id="SSMyearIIsemesterII"> </th>
                        <td> SSM 22113 </td>
                        <td> Chinese Language – Part 2 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 2201" id="SSMyearIIsemesterII"> </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemSSMyearIIIsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectSSMyearIIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32001" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32001 </td>
                        <td> General Fitness </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32202" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32202 </td>
                        <td> Specialization of a Selected Sport – Part 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32203" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32203 </td>
                        <td> Advanced Practicum </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32204" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32204 </td>
                        <td> Research Methodology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32205" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32205 </td>
                        <td> Sociology of Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32106" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32106 </td>
                        <td> Guidance and Counseling </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32207" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32207 </td>
                        <td> Sport Law </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32208" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32208 </td>
                        <td> Sport Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32209" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32110" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32110 </td>
                        <td> Test and Measurements </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32111" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32111 </td>
                        <td> Success in Sports </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32112" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32112 </td>
                        <td> Sport Education Model & Game Sense Approach </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32213" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32213 </td>
                        <td> Strength and Conditioning </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 32214" id="SSMyearIIIsemesterII"> </th>
                        <td> SSM 32214 </td>
                        <td> Sport Journalism </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemSSMyearIVsemesterII">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="SSM 42801" id="SSMyearIVsemesterI"> </th>
                        <td> SSM 42801 </td>
                        <td> B.Sc. Research Project in Sport Sciences & Management </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II table -->

</div>