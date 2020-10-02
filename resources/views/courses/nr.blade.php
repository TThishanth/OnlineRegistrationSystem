<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year I </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#NRyearIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#NRyearIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year II </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#NRyearIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#NRyearIIsemesterII" data-toggle="tab"> Semester II </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year III </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#NRyearIIIsemesterI" data-toggle="tab"> Semester I </a>
            <a class="dropdown-item" href="#NRyearIIIsemesterIIgeneral" data-toggle="tab"> Semester II (for General Degree only) </a>
            <a class="dropdown-item" href="#NRyearIIIsemesterIIspecial" data-toggle="tab"> Semester II (for Special Degree only) </a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> Year IV </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#NRyearIVsemesterI" data-toggle="tab"> Semester I (for Special Degree only)</a>
        </div>
    </li>

</ul>

<!-- Tab panes -->
<div class="tab-content" style="border-bottom: 1px solid #dee2e6; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6;">
    
    <!-- Year I Semester I table -->
    <div role="tabpanel" class="tab-pane" id="NRyearIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11201') }} </th>
                        <td> ESNRM 11201 </td>
                        <td> Introduction to Natural Resources </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11202') }} </th>
                        <td> ESNRM 11202 </td>
                        <td> Biology I: Fundamentals of Cellular and Organismic Biology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11203') }} </th>
                        <td> ESNRM 11203 </td>
                        <td> Biology II: Fundamentals of Evolution, Systematics and Diversity of Life </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11204') }} </th>
                        <td> ESNRM 11204 </td>
                        <td> General Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11205') }} </th>
                        <td> ESNRM 11205 </td>
                        <td> Fundamental of Organic Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11106') }} </th>
                        <td> ESNRM 11106 </td>
                        <td> Elementary Chemistry Laboratory I </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11207') }} </th>
                        <td> ESNRM 11207 </td>
                        <td> Computer Fundamentals </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11108') }} </th>
                        <td> ESNRM 11108 </td>
                        <td> Computer Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 11209') }} </th>
                        <td> ESNRM 11209 </td>
                        <td> Mathematics for Biological Sciences </td>
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
    <div role="tabpanel" class="tab-pane" id="NRyearIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12201') }} </th>
                        <td> ESNRM 12201 </td>
                        <td> Introduction to Environmental Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12202') }} </th>
                        <td> ESNRM 12202 </td>
                        <td> Earth Processes </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12203 ') }} </th>
                        <td> ESNRM 12203  </td>
                        <td> Introduction to Hydrology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12204') }} </th>
                        <td> ESNRM 12204 </td>
                        <td> Concepts of Ecology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12205') }} </th>
                        <td> ESNRM 12205 </td>
                        <td> Fundamentals of Physical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12206') }} </th>
                        <td> ESNRM 12206 </td>
                        <td> Fundamentals of Analytical Chemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12107') }} </th>
                        <td> ESNRM 12107 </td>
                        <td> Elementary Chemistry Laboratory II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12208') }} </th>
                        <td> ESNRM 12208 </td>
                        <td> Graphics and Web Design </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 12209') }} </th>
                        <td> ESNRM 12209 </td>
                        <td> Fundamentals of Statistics </td>
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
    <div role="tabpanel" class="tab-pane" id="NRyearIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21201') }} </th>
                        <td> ESNRM 21201 </td>
                        <td> Limnology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21202') }} </th>
                        <td> ESNRM 21202 </td>
                        <td> Microbiology for Natural Resource Studies </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21203') }} </th>
                        <td> ESNRM 21203 </td>
                        <td> Biotechnology and Biosafety </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21204') }} </th>
                        <td> ESNRM 21204 </td>
                        <td> Mineralogy and Petrology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21205') }} </th>
                        <td> ESNRM 21205 </td>
                        <td> Biodiversity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21206') }} </th>
                        <td> ESNRM 21206 </td>
                        <td> Basic Physics for Natural Resource studies </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21207') }} </th>
                        <td> ESNRM 21207 </td>
                        <td> Introduction to Soil Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21208') }} </th>
                        <td> ESNRM 21208 </td>
                        <td> Management Process </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 21209') }} </th>
                        <td> ESNRM 21209 </td>
                        <td> Advanced Statistics I </td>
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
    <div role="tabpanel" class="tab-pane" id="NRyearIIsemesterII">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22101') }} </th>
                        <td> ESNRM 22101 </td>
                        <td> Management of Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22102') }} </th>
                        <td> ESNRM 22102 </td>
                        <td> Environmental Toxicology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22203') }} </th>
                        <td> ESNRM 22203 </td>
                        <td> Remote Sensing and Geographic Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22104') }} </th>
                        <td> ESNRM 22104 </td>
                        <td> Practical in Remote Sensing and Geographic Information Systems </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22205') }} </th>
                        <td> ESNRM 22205 </td>
                        <td> Introduction to Economics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22106') }} </th>
                        <td> ESNRM 22106 </td>
                        <td> Geomorphology and Geology of Sri Lanka </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22207') }} </th>
                        <td> ESNRM 22207 </td>
                        <td> Soil Degradation and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22108') }} </th>
                        <td> ESNRM 22108 </td>
                        <td> Earth Science Practical </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22209') }} </th>
                        <td> ESNRM 22209 </td>
                        <td> Advanced Statistics II </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 22210') }} </th>
                        <td> ESNRM 22210 </td>
                        <td> Anaatural Resources </td>
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
    <div role="tabpanel" class="tab-pane" id="NRyearIIIsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31201') }} </th>
                        <td> ESNRM 31201 </td>
                        <td> Environmental and Natural Resource Economics </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31102') }} </th>
                        <td> ESNRM 31102 </td>
                        <td> Legal Framework for Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31203') }} </th>
                        <td> ESNRM 31203 </td>
                        <td> Statistical Application in Natural Resource Studies </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31204') }} </th>
                        <td> ESNRM 31204 </td>
                        <td> Industrial Chemistry and Technology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31105') }} </th>
                        <td> ESNRM 31105 </td>
                        <td> Industrial Minerals </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31106') }} </th>
                        <td> ESNRM 31106 </td>
                        <td> Practical in Hydrology and Soil Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31107') }} </th>
                        <td> ESNRM 31107 </td>
                        <td> Field Techniques in Earth Science </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31208') }} </th>
                        <td> ESNRM 31208 </td>
                        <td> Waste Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31209') }} </th>
                        <td> ESNRM 31209 </td>
                        <td> Field Techniques in Ecology and Biodiversity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31111') }} </th>
                        <td> ESNRM 31111 </td>
                        <td> Basic Methods of Surveying Sciences </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31112') }} </th>
                        <td> ESNRM 31112 </td>
                        <td> Practical in Surveying </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 31210') }} </th>
                        <td> ESNRM 31210 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester I table -->

    <!-- Year III Semester II table (for General Degree only) -->
    <div role="tabpanel" class="tab-pane" id="NRyearIIIsemesterIIgeneral">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32201') }} </th>
                        <td> ESNRM 32201 </td>
                        <td> Cleaner Production and Green Productivity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32202') }} </th>
                        <td> ESNRM 32202 </td>
                        <td> Energy Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32203') }} </th>
                        <td> ESNRM 32203 </td>
                        <td> Aquatic Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32204') }} </th>
                        <td> ESNRM 32204 </td>
                        <td> Coastal and Marine Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32205') }} </th>
                        <td> ESNRM 32205 </td>
                        <td> Biogeography </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32206') }} </th>
                        <td> ESNRM 32206 </td>
                        <td> Tools for Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32207') }} </th>
                        <td> ESNRM 32207 </td>
                        <td> Study and Management of Natural Hazards </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32208') }} </th>
                        <td> ESNRM 32208 </td>
                        <td> Biodiversity Conservation and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32209') }} </th>
                        <td> ESNRM 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32410') }} </th>
                        <td> ESNRM 32410 </td>
                        <td> B.Sc. Thesis in Environmental Sciences and Natural Resource Management </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year III Semester II table (for Special Degree only) -->
    <div role="tabpanel" class="tab-pane" id="NRyearIIIsemesterIIspecial">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32201') }} </th>
                        <td> ESNRM 32201 </td>
                        <td> Cleaner Production and Green Productivity </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32202') }} </th>
                        <td> ESNRM 32202 </td>
                        <td> Energy Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32203') }} </th>
                        <td> ESNRM 32203 </td>
                        <td> Aquatic Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32204') }} </th>
                        <td> ESNRM 32204 </td>
                        <td> Coastal and Marine Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32105') }} </th>
                        <td> ESNRM 32105 </td>
                        <td> Introduction to Biogeography </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32206') }} </th>
                        <td> ESNRM 32206 </td>
                        <td> Tools for Environmental Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32207') }} </th>
                        <td> ESNRM 32207 </td>
                        <td> Study and Management of Natural Hazards </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32208') }} </th>
                        <td> ESNRM 32208 </td>
                        <td> Biodiversity Conservation and Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32209') }} </th>
                        <td> ESNRM 32209 </td>
                        <td> Human Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 32110') }} </th>
                        <td> ESNRM 32110 </td>
                        <td> Community Outreach Program /Mini Project </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year III Semester II table -->

    <!-- Year IV Semester I table -->
    <div role="tabpanel" class="tab-pane" id="NRyearIVsemesterI">
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
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41201') }} </th>
                        <td> ESNRM 41201 </td>
                        <td> Research Methodology and Scientific Communication </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41102') }} </th>
                        <td> ESNRM 41102 </td>
                        <td> Environmental Quality Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41303') }} </th>
                        <td> ESNRM 41303 </td>
                        <td> Forestry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41204') }} </th>
                        <td> ESNRM 41204 </td>
                        <td> Environmental Governance </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41105') }} </th>
                        <td> ESNRM 41105 </td>
                        <td> Undergraduate Seminar Module in Environmental Sciences and Natural Resource Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41206') }} </th>
                        <td> ESNRM 41206 </td>
                        <td> Environmental Geochemistry </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41207') }} </th>
                        <td> ESNRM 41207 </td>
                        <td> Lichenology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41208') }} </th>
                        <td> ESNRM 41208 </td>
                        <td> Mineral Exploration </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41209') }} </th>
                        <td> ESNRM 41209 </td>
                        <td> Gemmology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41210') }} </th>
                        <td> ESNRM 41210 </td>
                        <td> Ground Water Exploration </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41211') }} </th>
                        <td> ESNRM 41211 </td>
                        <td> Applied Hydrology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41212') }} </th>
                        <td> ESNRM 41212 </td>
                        <td> Climatology and Meteorology </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41213') }} </th>
                        <td> ESNRM 41213 </td>
                        <td> Protected Area Management </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41214') }} </th>
                        <td> ESNRM 41214 </td>
                        <td> Eco Tourism </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41215') }} </th>
                        <td> ESNRM 41215 </td>
                        <td> Oil Exploration </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41216') }} </th>
                        <td> ESNRM 41216 </td>
                        <td> Biogeography and Conservation Planning </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41217') }} </th>
                        <td> ESNRM 41217 </td>
                        <td> Forestry for Rural Development </td>
                    </tr>
                    <tr>
                        <th scope="row"> {{ Form::checkbox('course[]', 'ESNRM 41218') }} </th>
                        <td> ESNRM 41218 </td>
                        <td> Environment and Society </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Year IV Semester I table -->

</div>