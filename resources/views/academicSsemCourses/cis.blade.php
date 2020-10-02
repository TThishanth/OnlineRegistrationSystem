<script>
   
    /*Year I Semester II */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIsemesterII").click(function(){
            $("#academicForm #CISyearIsemesterII").prop('checked',this.checked);
        });
    });

    /*Year II Semester II */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIIsemesterII").click(function(){
            $("#academicForm #CISyearIIsemesterII").prop('checked',this.checked);
        });
    });

    /*Year IV Semester II */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIVsemesterII").click(function(){
            $("#academicForm #CISyearIVsemesterII").prop('checked',this.checked);
        });
    });
</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemCISyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemCISyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemCISyearIIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#SsemCISyearIVsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
        
    <!-- Year I Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemCISyearIsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 12307" id="CISyearIsemesterII"> </th>
                        <td> IS 12307 </td>
                        <td> Object Oriented Programming </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 12308" id="CISyearIsemesterII"> </th>
                        <td> IS 12308 </td>
                        <td> Database Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 12209" id="CISyearIsemesterII"> </th>
                        <td> IS 12209 </td>
                        <td> Emerging Technologies for Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 12210" id="CISyearIsemesterII"> </th>
                        <td> IS 12210 </td>
                        <td> Advanced Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 12311" id="CISyearIsemesterII"> </th>
                        <td> IS 12311 </td>
                        <td> Analysis of Algorithms </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 12212" id="CISyearIsemesterII"> </th>
                        <td> IS 12212 </td>
                        <td> Human Computer Interaction </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 1201" id="CISyearIsemesterII"> </th>
                        <td> CPE 1201 </td>
                        <td> Professional English II </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester II table -->

    <!-- Year II Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemCISyearIIsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIIsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22220" id="CISyearIIsemesterII"> </th>
                        <td> IS 22220 </td>
                        <td> System Administration and Maintenance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22221" id="CISyearIIsemesterII"> </th>
                        <td> IS 22221 </td>
                        <td> Operating System Concepts </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22222" id="CISyearIIsemesterII"> </th>
                        <td> IS 22222 </td>
                        <td> System Integration and Architecture </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22223" id="CISyearIIsemesterII"> </th>
                        <td> IS 22223 </td>
                        <td> IS Risk Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22224" id="CISyearIIsemesterII"> </th>
                        <td> IS 22224 </td>
                        <td> IT Governance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22225" id="CISyearIIsemesterII"> </th>
                        <td> IS 22225 </td>
                        <td> Business Intelligence </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 22226" id="CISyearIIsemesterII"> </th>
                        <td> IS 22226 </td>
                        <td> Web Technologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="CPE 2201" id="CISyearIIsemesterII"> </th>
                        <td> CPE 2201 </td>
                        <td> Professional English IV </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester II table -->

    <!-- Year III Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemCISyearIIIsemesterII">
        <div class="table-responsive container py-5"> 
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
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 32842"> </th>
                        <td> IS 32842 </td>
                        <td> Industrial Training </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester II table -->
    <div role="tabpanel" class="tab-pane" id="SsemCISyearIVsemesterII">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIVsemesterII" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42853" id="CISyearIVsemesterII"> </th>
                        <td> IS 42853 </td>
                        <td> Research Project in Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42254" id="CISyearIVsemesterII"> </th>
                        <td> IS 42254 </td>
                        <td> Business/IT Alignment </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42255" id="CISyearIVsemesterII"> </th>
                        <td> IS 42255 </td>
                        <td> Business Process Simulation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42256" id="CISyearIVsemesterII"> </th>
                        <td> IS 42256 </td>
                        <td> Information System Economics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42257" id="CISyearIVsemesterII"> </th>
                        <td> IS 42257 </td>
                        <td> Enterprise Modeling Ontologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42258" id="CISyearIVsemesterII"> </th>
                        <td> IS 42258 </td>
                        <td> Enterprise Architecture Framework </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42259" id="CISyearIVsemesterII"> </th>
                        <td> IS 42259 </td>
                        <td> Web Service Technologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42260" id="CISyearIVsemesterII"> </th>
                        <td> IS 42260 </td>
                        <td> Software Architecture </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42261" id="CISyearIVsemesterII"> </th>
                        <td> IS 42261 </td>
                        <td> Computer System Security </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Ssemcourse[]" value="IS 42262" id="CISyearIVsemesterII"> </th>
                        <td> IS 42262 </td>
                        <td> Mobile Computing </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester II table -->

</div>