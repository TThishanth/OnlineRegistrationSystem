<script>
    /* Year I Semester I */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIsemesterI").click(function(){
            $("#academicForm #FSTyearIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year II Semester I */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIIsemesterI").click(function(){
            $("#academicForm #FSTyearIIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year III Semester I */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIIIsemesterI").click(function(){
            $("#academicForm #FSTyearIIIsemesterI").prop('checked',this.checked);
        });
    });

    /*Year IV Semester I */
    $(document).ready(function(){
        $("#academicForm #selectFSTyearIVsemesterI").click(function(){
            $("#academicForm #FSTyearIVsemesterI").prop('checked',this.checked);
        });
    });
</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemFSTyearIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemFSTyearIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemFSTyearIIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemFSTyearIVsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemFSTyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11201" id="FSTyearIsemesterI"> </th>
                        <td> FST 11201 </td>
                        <td> Introduction to Food Science and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11202" id="FSTyearIsemesterI"> </th>
                        <td> FST 11202 </td>
                        <td> Food Biology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11103" id="FSTyearIsemesterI"> </th>
                        <td> FST 11103 </td>
                        <td> Food Biology Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11204" id="FSTyearIsemesterI"> </th>
                        <td> FST 11204 </td>
                        <td> General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11205" id="FSTyearIsemesterI"> </th>
                        <td> FST 11205 </td>
                        <td> Fundamentals of Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11106" id="FSTyearIsemesterI"> </th>
                        <td> FST 11106 </td>
                        <td> Elementary Chemistry Laboratory I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11207" id="FSTyearIsemesterI"> </th>
                        <td> FST 11207 </td>
                        <td> Computer Fundamentals </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11108" id="FSTyearIsemesterI"> </th>
                        <td> FST 11108 </td>
                        <td> Computer Practical 1 </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11209" id="FSTyearIsemesterI"> </th>
                        <td> FST 11209 </td>
                        <td> Mathematics for Food Science and  Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 11210" id="FSTyearIsemesterI"> </th>
                        <td> FST 11210 </td>
                        <td> Production of Agricultural Raw Materials for better Food Quality </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 1101" id="FSTyearIsemesterI"> </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemFSTyearIIsemesterI">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21201" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21201 </td>
                        <td> Biochemistry II </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21202" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21202 </td>
                        <td> Food Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21103" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21103 </td>
                        <td> Biochemistry  and  Food Chemistry Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21204" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21204 </td>
                        <td> Principles of Human Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21105" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21105 </td>
                        <td> Food  Process  Engineering I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21206" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21206 </td>
                        <td> Food Preservation </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21107" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21107 </td>
                        <td> Food Preservation Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21208" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21208 </td>
                        <td> Food Microbiology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21209" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21209 </td>
                        <td> Statistics I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 21210" id="FSTyearIIsemesterI"> </th>
                        <td> FST 21210 </td>
                        <td> Management Process </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 2101" id="FSTyearIIsemesterI"> </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemFSTyearIIIsemesterI">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31201" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31201 </td>
                        <td> Food Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31102" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31102 </td>
                        <td> Food  Analysis  Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31203" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31203 </td>
                        <td> Dairy  Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31204" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31204 </td>
                        <td> Food  Packaging </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31205" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31205 </td>
                        <td> Applied Human Nutrition </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31106" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31106 </td>
                        <td> Human Nutrition Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31107" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31107 </td>
                        <td> Food Regulations </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31208" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31208 </td>
                        <td> Food Safety and Risk Analysis </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31209" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31209 </td>
                        <td> Food Industries and Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 31210" id="FSTyearIIIsemesterI"> </th>
                        <td> FST 31210 </td>
                        <td> Research Methodology  and  Scientific Communication </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemFSTyearIVsemesterI">
        <div class="table-responsive container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectFSTyearIVsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41201" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41201 </td>
                        <td> Integrated  Project  in Food Science  and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41102" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41102 </td>
                        <td> Root Crops Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41103" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41103 </td>
                        <td> Spice Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41104" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41104 </td>
                        <td> Grain Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41105" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41105 </td>
                        <td> Fruit and Vegetable Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41106" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41106 </td>
                        <td> Edible Oil  Processing  Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41107" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41107 </td>
                        <td> Food Processing  Technology Practical (Cereals/Grains,Spices,Root crops, Tubers and Confectionery) </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41208" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41208 </td>
                        <td> Meat and Egg Processing Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41109" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41109 </td>
                        <td> Meat, Egg and Aquatic Food Processing Technology  Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41210" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41210 </td>
                        <td> Advanced Food Quality Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="FST 41111" id="FSTyearIVsemesterI"> </th>
                        <td> FST 41111 </td>
                        <td> Functional Foods and Nutraceuticals </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>