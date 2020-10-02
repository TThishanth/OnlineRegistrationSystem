<script>
    /* Year I Semester I */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIsemesterI").click(function(){
            $("#academicForm #NRyearIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year II Semester I */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIIsemesterI").click(function(){
            $("#academicForm #NRyearIIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year III Semester I */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIIIsemesterI").click(function(){
            $("#academicForm #NRyearIIIsemesterI").prop('checked',this.checked);
        });
    });

    /* Year IV Semester I */
    $(document).ready(function(){
        $("#academicForm #selectNRyearIVsemesterI").click(function(){
            $("#academicForm #NRyearIVsemesterI").prop('checked',this.checked);
        });
    });

</script>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemNRyearIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemNRyearIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemNRyearIIIsemesterI" data-toggle="tab"> Semester I </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#FsemNRyearIVsemesterI" data-toggle="tab"> Semester I (for Special Degree only)</a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemNRyearIsemesterI">
        <div class="table-responsive container py-3 py-sm-5" wfd-id="2"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11201" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11201 </td>
                        <td> Introduction to Natural Resources </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11202" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11202 </td>
                        <td> Biology I: Fundamentals of Cellular and Organismic Biology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11203" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11203 </td>
                        <td> Biology II: Fundamentals of Evolution, Systematics and Diversity of Life </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11204" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11204 </td>
                        <td> General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11205" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11205 </td>
                        <td> Fundamental of Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11106" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11106 </td>
                        <td> Elementary Chemistry Laboratory I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11207" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11207 </td>
                        <td> Computer Fundamentals </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11108" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11108 </td>
                        <td> Computer Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 11209" id="NRyearIsemesterI"> </th>
                        <td> ESNRM 11209 </td>
                        <td> Mathematics for Biological Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 1101" id="NRyearIsemesterI"> </th>
                        <td> CPE 1101 </td>
                        <td> Professional English I </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year I Semester I table -->

    <!-- Year II Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemNRyearIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21201" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21201 </td>
                        <td> Limnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21202" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21202 </td>
                        <td> Microbiology for Natural Resource Studies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21203" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21203 </td>
                        <td> Biotechnology and Biosafety </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21204" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21204 </td>
                        <td> Mineralogy and Petrology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21205" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21205 </td>
                        <td> Biodiversity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21206" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21206 </td>
                        <td> Basic Physics for Natural Resource studies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21207" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21207 </td>
                        <td> Introduction to Soil Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21208" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21208 </td>
                        <td> Management Process </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 21209" id="NRyearIIsemesterI"> </th>
                        <td> ESNRM 21209 </td>
                        <td> Advanced Statistics I </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="CPE 2101" id="NRyearIIsemesterI"> </th>
                        <td> CPE 2101 </td>
                        <td> Professional English III </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year II Semester I table -->

    <!-- Year III Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemNRyearIIIsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIIIsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31201" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31201 </td>
                        <td> Environmental and Natural Resource Economics </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31102" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31102 </td>
                        <td> Legal Framework for Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31203" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31203 </td>
                        <td> Statistical Application in Natural Resource Studies </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31204" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31204 </td>
                        <td> Industrial Chemistry and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31105" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31105 </td>
                        <td> Industrial Minerals </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31106" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31106 </td>
                        <td> Practical in Hydrology and Soil Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31107" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31107 </td>
                        <td> Field Techniques in Earth Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31208" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31208 </td>
                        <td> Waste Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31209" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31209 </td>
                        <td> Field Techniques in Ecology and Biodiversity </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31111" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31111 </td>
                        <td> Basic Methods of Surveying Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31112" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31112 </td>
                        <td> Practical in Surveying </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 31210" id="NRyearIIIsemesterI"> </th>
                        <td> ESNRM 31210 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="FsemNRyearIVsemesterI">
        <div class="container py-5"> 
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="text-nowrap"> <input type="checkbox" id="selectNRyearIVsemesterI" /> Select </th>
                        <th scope="col"> Course Code </th>
                        <th scope="col"> Course Title </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41201" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41201 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41102" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41102 </td>
                        <td> Environmental Quality Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41303" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41303 </td>
                        <td> Forestry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41204" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41204 </td>
                        <td> Environmental Governance </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41105" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41105 </td>
                        <td> Undergraduate Seminar Module in Environmental Sciences and Natural Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41206" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41206 </td>
                        <td> Environmental Geochemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41207" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41207 </td>
                        <td> Lichenology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41208" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41208 </td>
                        <td> Mineral Exploration </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41209" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41209 </td>
                        <td> Gemmology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41210" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41210 </td>
                        <td> Ground Water Exploration </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41211" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41211 </td>
                        <td> Applied Hydrology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41212" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41212 </td>
                        <td> Climatology and Meteorology </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41213" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41213 </td>
                        <td> Protected Area Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41214" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41214 </td>
                        <td> Eco Tourism </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41215" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41215 </td>
                        <td> Oil Exploration </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41216" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41216 </td>
                        <td> Biogeography and Conservation Planning </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41217" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41217 </td>
                        <td> Forestry for Rural Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> <input type="checkbox" name="Fsemcourse[]" value="ESNRM 41218" id="NRyearIVsemesterI"> </th>
                        <td> ESNRM 41218 </td>
                        <td> Environment and Society </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>