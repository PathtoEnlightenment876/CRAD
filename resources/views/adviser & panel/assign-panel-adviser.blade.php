
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRAD</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/sms.jpg')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .fw-bold {
            font-weight: 700 !important;
        }

        .sidebar {
            position: fixed;
            /* Ensure the sidebar stays in place */
            top: 0;
            left: 0;
            height: 100vh;
            /* Full height of the viewport */
            overflow-y: auto;
            /* Enable vertical scrolling */
            width: 280px;
            /* Sidebar width */
            background-color: #284b9a;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            /* Optional shadow for better visibility */
        }

        .sidebar .user-profile {
            padding: 1.5rem 1rem;
            text-align: center;
            color: white;
        }

        .sidebar .user-profile .initials {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #3B71CA;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 0.5rem;
        }

        .sidebar .nav-link {
            color: #bdc3c7;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            border-left: 3px solid transparent;
        }


        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            color: #ffffff;
            background-color: #284b9a;
            border-left: 3px solid #3B71CA;
        }

        .sidebar .nav-link i {
            margin-right: 0.75rem;
        }

        .main-content-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin-left: 280px;
            /* Default margin for desktop */
            width: calc(100% - 280px);
            transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
        }

        .top-navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
            padding: 0.5rem 1.5rem;
        }

        .content-area {
            padding: 2rem;
            flex-grow: 1;
        }

        .footer {
            padding: 1rem 2rem;
            background-color: #ffffff;
            border-top: 1px solid #dee2e6;
            font-size: 0.875rem;
            color: #6c757d;
        }

        /* New overlay style */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1029;
            /* Just below the sidebar's z-index */
        }

        /* Responsive Styles */
        @media (max-width: 991.98px) {
            .sidebar {
                margin-left: -280px;
                /* Hide sidebar by default on smaller screens */
            }

            .main-content-wrapper {
                margin-left: 0;
                width: 100%;
            }

            body.sidebar-toggled .sidebar {
                margin-left: 0;
                /* Show sidebar when toggled */
            }

            /* Show overlay when sidebar is toggled on mobile */
            body.sidebar-toggled .sidebar-overlay {
                display: block;
            }
        }

        @import url("../style.css");
    </style>

</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column flex-shrink-0 sidebar">
            <div class="user-profile">
                <img src="{{ asset('img/sms.jpg') }}" alt="Logo" class="img-fluid rounded-circle mb-2" style="width: 60px; height: 60px;">
                <h5 class="mb-0">CRAD</h5>
            </div>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <!-- dashboard -->
                    <a href="{{url('/dashboard')}}" class="nav-link d-flex align-items-center justify-content-center text-white active gap-2">
                        <i class="bi bi-speedometer fs-5"></i>
                        <span class="description">Dashboard</span>
                    </a>


                </li>

                <li>
                    <a href="#" class="nav-link text-center active" data-bs-toggle="collapse" data-bs-target="#module1drop" aria-expanded="false" aria-controls="module1drop">
                        <i class="bi bi-cloud-upload fs-5"></i>
                        <span class="description">Proposal Submission & Tracking
                            <i class="bi bi-caret-down-fill"></i>
                        </span>
                    </a>

                    <!-- submodules 1 -->
                    <div class="sub-menu collapse" id="module1drop">
                        <a href="{{url('/new-proposal') }}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Submit New Proposal</span></a>
                        <a href="{{url('/proposal-stats')}}" class="nav-link"><i class="bi bi-list-ul"></i><span class="description">Proposal Status Tracking</span></a>
                        <a href="{{url('/feedback')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description"> Feedback</span></a>
                        <a href="{{url('/resubmit')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Revision Submission</span></a>
                        <a href="{{url('/approve')}}" class="nav-link"><i class="bi bi-list-ul"></i><span class="description">Approved List</span></a>
                    </div>
                </li>
                <li>
                    <!-- module 2 -->
                    <a href="#" class="nav-link text-center" data-bs-toggle="collapse" data-bs-target="#module2drop" aria-expanded="false" aria-controls="module2drop">
                        <i class="bi bi-person-plus-fill fs-5"></i>
                        <span class="description">Adviser & Panel Assignment System
                            <i class="bi bi-caret-down-fill"></i>
                        </span>
                    </a>
                    <!-- submodules 2 -->
                    <div class="sub-menu collapse" id="module2drop">
                        <a href="{{url('/add-panel-adviser')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Add Adviser & Panel</span></a>
                        <a href="{{url('/assign-panel-adviser')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Assign Adviser & Panel </span></a>
                        <a href="{{url('/view-assigns')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">View Assignments</span></a>
                    </div>
                </li>
                <li>
                    <!-- module 3 -->
                    <a href="#" class="nav-link text-center" data-bs-toggle="collapse" data-bs-target="#module3drop" aria-expanded="false" aria-controls="module3drop">
                        <i class="bi bi-cash-stack fs-5"></i>
                        <span class="description">Grants & Funding Assistance
                            <i class="bi bi-caret-down-fill"></i>
                        </span>
                    </a>
                    <!-- submodules 3 -->
                    <div class="sub-menu collapse" id="module3drop">
                        <a href="{{url('/apply-grants')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Apply for Grant</span></a>
                        <a href="{{url('/grant-status')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Grant Status</span></a>
                        <a href="{{url('/fund-alloc')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Funding Allocation</span></a>
                        <a href="{{url('/disburse')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Disbursement Schedule</span></a>
                        <a href="{{url('/fund-reports')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Funding Reports</span></a>
                    </div>
                </li>

                <!-- module 4 -->
                <a href="#" class="nav-link text-center active" data-bs-toggle="collapse" data-bs-target="#module4drop" aria-expanded="false" aria-controls="module4drop">
                    <i class="bi bi-book fs-5"></i>
                    <span class="description">Documentation & Publication Management
                        <i class="bi bi-caret-down-fill"></i>
                    </span>
                </a>
                <!-- submodules 4 -->
                <div class="sub-menu collapse" id="module4drop">
                    <a href="{{url('/repo')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Repository</span></a>
                    <a href="{{url ('/publication')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Publications</span></a>
                    <a href="{{url('/archive')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Archive/Search</span></a>
                    <a href="{{url('/report')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Reports</span></a>


                </div>
                </li>

                <!-- module 5-->
              <a href="{{url('/analytics')}}" class="nav-link text-center">
                    <i class="bi bi-bar-chart-line fs-5"></i>
                    <span class="description">Analytics & Reporting</span>
                </a>

                <!-- module 6 -->
                <a href="#" class="nav-link text-center active" data-bs-toggle="collapse" data-bs-target="#module6drop" aria-expanded="false" aria-controls="module6drop">
                    <i class="bi bi-calendar4-week fs-5"></i>
                    <span class="description">Defense Scheduling
                        <i class="bi bi-caret-down-fill"></i>
                    </span>
                </a>

                <!-- submodules 6 -->
                <div class="sub-menu collapse" id="module6drop">
                    <a href="{{url('/set-sched')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Set Schedule</span></a>
                    <a href="{{url('/re-sched')}}" class="nav-link"><i class="bi bi-list-ul"></i><span class="description">Reschedule /Cancel</span></a>
                    <a href="{{url('/defense-calendar')}}" class="nav-link"><i class="bi bi-list-ul"></i> <span class="description">Defense Calendar</span></a>
                </div>


            </ul>
            <div class="p-3">
                <!-- This space is intentionally left blank after removing the logout button -->
            </div>
        </div>

        <!-- Main Content Wrapper -->
        <div class="main-content-wrapper">
            <!-- Top Navbar -->
            <nav class="top-navbar d-flex justify-content-between align-items-center">
                <div>
                    <button id="sidebar-toggle" class="btn btn-light"><i class="bi bi-list"></i></button>
                </div>
                <div class="d-flex align-items-center">
                    <span id="current-time" class="me-3 d-none d-sm-inline"></span>
                    <a href="#" class="text-dark me-3"><i class="bi bi-bell fs-5"></i></a>
                    <a href="#" class="text-dark me-3"><i class="bi bi-search fs-5"></i></a>

                    <!-- User Dropdown -->
                    <div class="dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-4"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li>
                                <h6 class="dropdown-header"></h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" style="margin: 0;">
                                    <button type="submit" name="logout" class="dropdown-item">Logout</button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Area -->
            <main class="content-area">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adviser & Panel</li>
                    </ol>
                   
                </nav>
                 
<div class="container">
    <h2 class="text-center mb-4">Group Assignment</h2>
    
    <ul class="nav nav-pills nav-justified mb-4" id="formTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="adviser-tab" data-bs-toggle="pill" data-bs-target="#adviser-form" type="button" role="tab" aria-controls="adviser-form" aria-selected="true">Assign Adviser</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="panel-member-tab" data-bs-toggle="pill" data-bs-target="#panel-member-form" type="button" role="tab" aria-controls="panel-member-form" aria-selected="false">Assign Panel Member</button>
        </li>
    </ul>

    <div class="tab-content" id="formTabsContent">
        <div class="tab-pane fade show active" id="adviser-form" role="tabpanel" aria-labelledby="adviser-tab">
            <form id="adviserForm" class="p-3">
                <p class="text-center text-muted mb-4">Assign an adviser to a group.</p>
                
                <div class="mb-3">
                    <label for="adviserDeptSelect" class="form-label">Department</label>
                    <select class="form-select" id="adviserDeptSelect" required>
                        <option selected disabled value="">Filter by department...</option>
                        <option value="All">All Departments</option>
                        <option value="IT">IT</option>
                        <option value="EDUC">EDUC</option>
                        <option value="CRIM">CRIM</option>
                        <option value="BSBA">BSBA</option>
                        <option value="BSHM">BSHM</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="adviserSelect" class="form-label">Select Adviser</label>
                    <select class="form-select" id="adviserSelect" name="adviserName" required>
                        <option selected disabled value="">Choose from existing advisers...</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="adviserGroupNumber" class="form-label">Group Number</label>
                    <input type="text" class="form-control" id="adviserGroupNumber" name="groupNumber" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Assign Adviser</button>
                </div>
            </form>
        </div>

        <div class="tab-pane fade" id="panel-member-form" role="tabpanel" aria-labelledby="panel-member-tab">
            <form id="panelMemberForm" class="p-3">
                <p class="text-center text-muted mb-4">Assign a panel member to a group.</p>
                
                <div class="mb-3">
                    <label for="panelDeptSelect" class="form-label">Department</label>
                    <select class="form-select" id="panelDeptSelect" required>
                        <option selected disabled value="">Filter by department...</option>
                        <option value="All">All Departments</option>
                        <option value="IT">IT</option>
                        <option value="EDUC">EDUC</option>
                        <option value="CRIM">CRIM</option>
                        <option value="BSBA">BSBA</option>
                        <option value="BSHM">BSHM</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="panelSelect" class="form-label">Select Panel Member(s)</label>
                    <select class="form-select" id="panelSelect" name="panelMembers" multiple required>
                        </select>
                    <div class="form-text">Hold Ctrl (or Cmd on Mac) to select multiple members.</div>
                </div>
                
                <div class="mb-3">
                    <label for="panelGroupNumber" class="form-label">Group Number</label>
                    <input type="text" class="form-control" id="panelGroupNumber" name="groupNumber" required>
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Assign Panel Member(s)</button>
                </div>
            </form>
        </div>
    </div>
    
    <div id="confirmationMessage" class="alert mt-4 d-none" role="alert">
        </div>

</div>
            </main>

            <!-- Footer -->
            <footer class="footer">
                Center for Research And Development &copy;
            </footer>
        </div>
        <!-- Sidebar Overlay -->
        <div class="sidebar-overlay"></div>
    </div>

    <script>
        // Ensure the sidebar toggle functionality is initialized
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            document.body.classList.toggle('sidebar-toggled');
        });

        // New: Close sidebar when overlay is clicked
        document.querySelector('.sidebar-overlay').addEventListener('click', function() {
            document.body.classList.remove('sidebar-toggled');
        });

        // Clock Functionality
        function updateTime() {
            const timeElement = document.getElementById('current-time');
            if (timeElement) {
                const now = new Date();
                timeElement.textContent = now.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: true
                });
            }
        }
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Pre-existing data with department
        const advisers = [
            { name: 'Dr. Mark Johnson', dept: 'IT' },
            { name: 'Dr. Robert Taylor', dept: 'EDUC' },
            { name: 'Prof. Jane Williams', dept: 'EDUC' }, 
            { name: 'Dr. Alex Carter', dept: 'CRIM' }, 
            { name: 'Dr. Chris Evans', dept: 'BSBA' }, 
            { name: 'Prof. Emily Wilson', dept: 'BSHM' }
        ];
        
        const panelMembers = [
            { name: 'Prof. Maria Davis', dept: 'IT' }, 
            { name: 'Dr. Kevin Brown', dept: 'IT' }, 
            { name: 'Prof. Susan King', dept: 'CRIM' }, 
            { name: 'Dr. David Kim', dept: 'BSHM' }, 
            { name: 'Dr. Olivia Chen', dept: 'BSHM' }, 
            { name: 'Dr. Alan Smith', dept: 'EDUC' },
            { name: 'Prof. John Smith', dept: 'EDUC' }, 
            { name: 'Prof. Jane Doe', dept: 'EDUC' }
        ];

        const adviserDeptSelect = document.getElementById('adviserDeptSelect');
        const adviserSelect = document.getElementById('adviserSelect');
        const panelDeptSelect = document.getElementById('panelDeptSelect');
        const panelSelect = document.getElementById('panelSelect');
        const adviserForm = document.getElementById('adviserForm');
        const panelMemberForm = document.getElementById('panelMemberForm');
        const confirmationMessage = document.getElementById('confirmationMessage');

        // Function to populate a select element with filtered data
        const populateSelect = (selectElement, data, deptFilter) => {
            selectElement.innerHTML = `<option selected disabled value="">Choose from existing...</option>`;
            const filteredData = deptFilter === 'All' 
                ? data 
                : data.filter(item => item.dept === deptFilter);
            
            filteredData.forEach(item => {
                const option = document.createElement('option');
                option.value = item.name;
                option.textContent = item.name;
                selectElement.appendChild(option);
            });
        };

        // Event listeners for department filters
        adviserDeptSelect.addEventListener('change', (event) => {
            const selectedDept = event.target.value;
            populateSelect(adviserSelect, advisers, selectedDept);
        });

        panelDeptSelect.addEventListener('change', (event) => {
            const selectedDept = event.target.value;
            populateSelect(panelSelect, panelMembers, selectedDept);
        });

        // --- Panel Validation Logic ---
        const assignedPanels = {};

        function validatePanel(selectedMembers, groupNumber) {
            // Rule 1: Maximum of 3 members
            if (selectedMembers.length > 3) {
                 return { isValid: false, message: `**Error:** A maximum of 3 panel members can be selected at a time.` };
            }

            // Rule 2: Must have at least one doctorate (Dr.)
            const hasDoctorate = selectedMembers.some(member => member.startsWith('Dr.'));
            if (!hasDoctorate) {
                return { isValid: false, message: `**Error:** A panel must have at least one doctorate (Dr.).` };
            }

            return { isValid: true, message: '' };
        }

        // --- Form Submission Handlers ---
        const handleFormSubmission = (event, formType) => {
            event.preventDefault();
            const form = event.target;
            
            confirmationMessage.classList.add('d-none');

            if (form.checkValidity()) {
                let message;
                let isError = false;

                if (formType === 'adviser') {
                    const adviserName = form.querySelector('select[name="adviserName"]').value;
                    const groupNumber = form.querySelector('input[name="groupNumber"]').value;
                    message = `**${adviserName}** has been successfully assigned as the adviser for **Group ${groupNumber}**.`;
                } else if (formType === 'panel') {
                    const selectedOptions = Array.from(form.querySelector('select[name="panelMembers"]').selectedOptions);
                    const selectedMembers = selectedOptions.map(option => option.value);
                    const groupNumber = form.querySelector('input[name="groupNumber"]').value;
                    
                    const validationResult = validatePanel(selectedMembers, groupNumber);
                    
                    if (!validationResult.isValid) {
                        message = validationResult.message;
                        isError = true;
                    } else {
                        // Store the assigned panel members
                        assignedPanels[groupNumber] = selectedMembers;
                        
                        const panelList = assignedPanels[groupNumber].join(', ');
                        message = `**${selectedMembers.join(', ')}** have been successfully assigned as panel member(s) for **Group ${groupNumber}**. The panel now consists of: **${panelList}**`;
                    }
                }
                
                confirmationMessage.innerHTML = message;
                confirmationMessage.classList.remove('d-none', 'alert-success', 'alert-danger');
                confirmationMessage.classList.add(isError ? 'alert-danger' : 'alert-success');
                
                confirmationMessage.scrollIntoView({ behavior: 'smooth' });

                if (!isError) {
                    form.reset();
                }
            } else {
                form.reportValidity();
            }
        };

        adviserForm.addEventListener('submit', (event) => handleFormSubmission(event, 'adviser'));
        panelMemberForm.addEventListener('submit', (event) => handleFormSubmission(event, 'panel'));
    });
</script>
</html>