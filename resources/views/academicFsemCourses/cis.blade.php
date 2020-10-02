<script>
    /* Year I Semester I */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIsemesterI").click(function(){
            $("#academicForm #CISyearIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year II Semester I */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIIsemesterI").click(function(){
            $("#academicForm #CISyearIIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year III Semester I */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIIIsemesterI").click(function(){
            $("#academicForm #CISyearIIIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year IV Semester I */
    $(document).ready(function(){
        $("#academicForm #selectCISyearIVsemesterI").click(function(){
            $("#academicForm #CISyearIVsemesterI").prop('checked',this.checked);
        });
    });

</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemCISyearIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemCISyearIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemCISyearIIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemCISyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
        
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemCISyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 11201" id="CISyearIsemesterI"> </th>
                        <td> IS 11201 </td>
                        <td> Fundamentals of Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 11302" id="CISyearIsemesterI"> </th>
                        <td> IS 11302 </td>
                        <td> Structured Programming Techniques </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 11203" id="CISyearIsemesterI"> </th>
                        <td> IS 11203 </td>
                        <td> Information Systems Theory and Practice </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 11204" id="CISyearIsemesterI"> </th>
                        <td> IS 11204 </td>
                        <td> Information System Infrastructure </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 11205" id="CISyearIsemesterI"> </th>
                        <td> IS 11205 </td>
                        <td> Fundamentals of Mathematics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 11206" id="CISyearIsemesterI"> </th>
                        <td> IS 11206 </td>
                        <td> Statistics and Probability Theory </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 1101" id="CISyearIsemesterI"> </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemCISyearIIsemesterI">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21213" id="CISyearIIsemesterI"> </th>
                        <td> IS 21213 </td>
                        <td> Personal Productivity with IS technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21214" id="CISyearIIsemesterI"> </th>
                        <td> IS 21214 </td>
                        <td> Software Project Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21215" id="CISyearIIsemesterI"> </th>
                        <td> IS 21215 </td>
                        <td> Object Oriented Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21216" id="CISyearIIsemesterI"> </th>
                        <td> IS 21216 </td>
                        <td> Platform Technologies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21217" id="CISyearIIsemesterI"> </th>
                        <td> IS 21217 </td>
                        <td> System Analysis and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21218" id="CISyearIIsemesterI"> </th>
                        <td> IS 21218 </td>
                        <td> Information Assurance and Security </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 21219" id="CISyearIIsemesterI"> </th>
                        <td> IS 21219 </td>
                        <td> Social and Professional Issues </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 2101" id="CISyearIIsemesterI"> </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemCISyearIIIsemesterI">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31227" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31227 </td>
                        <td> Rapid Application Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31228" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31228 </td>
                        <td> Electronic Business Strategy, Architecture and Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31129" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31129 </td>
                        <td> Enterprise Architecture </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31231" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31231 </td>
                        <td> Management Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31232" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31232 </td>
                        <td> IT Auditing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31233" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31233 </td>
                        <td> Entrepreneurship and Innovation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31234" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31234 </td>
                        <td> Software Engineering </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31235" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31235 </td>
                        <td> Data Communication and Networks </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31236" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31236 </td>
                        <td> Geographical Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31237" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31237 </td>
                        <td> Advanced Database Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31238" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31238 </td>
                        <td> Organizational Behavior and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31239" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31239 </td>
                        <td> Agile Software Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31240" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31240 </td>
                        <td> Software Quality Assurance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 31241" id="CISyearIIIsemesterI"> </th>
                        <td> IS 31241 </td>
                        <td> Design Patterns and Applications </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemCISyearIVsemesterI">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectCISyearIVsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41243" id="CISyearIVsemesterI"> </th>
                        <td> IS 41243 </td>
                        <td> Introduction to Distributed Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41244" id="CISyearIVsemesterI"> </th>
                        <td> IS 41244 </td>
                        <td> Information Systems Strategies, Management and Acquisition </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41245" id="CISyearIVsemesterI"> </th>
                        <td> IS 41245 </td>
                        <td> Business Process Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41246" id="CISyearIVsemesterI"> </th>
                        <td> IS 41246 </td>
                        <td> Enterprise Resource Planning </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41247" id="CISyearIVsemesterI"> </th>
                        <td> IS 41247 </td>
                        <td> Research Method </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41248" id="CISyearIVsemesterI"> </th>
                        <td> IS 41248 </td>
                        <td> Cloud Computing </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41249" id="CISyearIVsemesterI"> </th>
                        <td> IS 41249 </td>
                        <td> Logistics Systems and Transportation Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41250" id="CISyearIVsemesterI"> </th>
                        <td> IS 41250 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41251" id="CISyearIVsemesterI"> </th>
                        <td> IS 41251 </td>
                        <td> Data Mining and Applications </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="IS 41252" id="CISyearIVsemesterI"> </th>
                        <td> IS 41252 </td>
                        <td> Multimedia and Hypermedia Systems Development </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>