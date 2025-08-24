
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRAD</title>
    <!-- Favicon -->
    <link rel="icon" href="sms.jpg">
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
                    <div class="container">
    <div class="table-container">
        <h2 class="mb-4">Advisers & Panel Members</h2>

        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#crudModal" id="addNewBtn">
                + Add New
            </button>
        </div>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-advisers-tab" data-bs-toggle="pill" data-bs-target="#pills-advisers" type="button" role="tab" aria-controls="pills-advisers" aria-selected="true">Advisers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-panel-members-tab" data-bs-toggle="pill" data-bs-target="#pills-panel-members" type="button" role="tab" aria-controls="pills-panel-members" aria-selected="false">Panel Members</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-archived-tab" data-bs-toggle="pill" data-bs-target="#pills-archived" type="button" role="tab" aria-controls="pills-archived" aria-selected="false">Archived Data</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-advisers" role="tabpanel" aria-labelledby="pills-advisers-tab">
                <div class="mb-3">
                    <input type="text" id="advisersSearchInput" class="form-control" placeholder="Search advisers by name, department, or expertise...">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Expertise</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="advisersTableBody">
                            </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-panel-members" role="tabpanel" aria-labelledby="pills-panel-members-tab">
                <div class="mb-3">
                    <input type="text" id="panelMembersSearchInput" class="form-control" placeholder="Search panel members by name, department, or expertise...">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">Expertise</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="panelMembersTableBody">
                            </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-archived" role="tabpanel" aria-labelledby="pills-archived-tab">
                <div class="mb-3">
                    <input type="text" id="archivedSearchInput" class="form-control" placeholder="Search archived data...">
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Department</th>
                                <th scope="col">Expertise</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="archivedTableBody">
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="crudModal" tabindex="-1" aria-labelledby="crudModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="crudForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="crudModalLabel">Add New Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="entryIndex">
                    <div class="mb-3">
                        <label for="modalFullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="modalFullName" required>
                    </div>
                    <div class="mb-3">
                        <label for="modalRole" class="form-label">Role</label>
                        <select class="form-select" id="modalRole" required>
                            <option value="Adviser">Adviser</option>
                            <option value="Panel Member">Panel Member</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modalDepartment" class="form-label">Department</label>
                        <select class="form-select" id="modalDepartment" required>
                            <option value="IT">IT</option>
                            <option value="EDUC">EDUC</option>
                            <option value="CRIM">CRIM</option>
                            <option value="BSBA">BSBA</option>
                            <option value="BSHM">BSHM</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="modalExpertise" class="form-label">Expertise</label>
                        <select class="form-select" id="modalExpertise" required>
                            <option selected disabled value="">Select an expertise...</option>
                            <option value="Software Engineering, AI">Software Engineering, AI</option>
                            <option value="Curriculum Development">Curriculum Development</option>
                            <option value="Educational Psychology">Educational Psychology</option>
                            <option value="Criminal Justice, Forensics">Criminal Justice, Forensics</option>
                            <option value="Marketing, Management">Marketing, Management</option>
                            <option value="Hotel Management">Hotel Management</option>
                            <option value="Data Science, Machine Learning">Data Science, Machine Learning</option>
                            <option value="Cybersecurity">Cybersecurity</option>
                            <option value="Criminology Law">Criminology Law</option>
                            <option value="Hospitality Management">Hospitality Management</option>
                            <option value="Culinary Arts">Culinary Arts</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveBtn">Save changes</button>
                </div>
            </form>
        </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

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
    <script>
    let advisers = [];
    let panelMembers = [];
    let archivedData = [];

    const advisersTableBody = document.getElementById('advisersTableBody');
    const panelMembersTableBody = document.getElementById('panelMembersTableBody');
    const archivedTableBody = document.getElementById('archivedTableBody');
    const advisersSearchInput = document.getElementById('advisersSearchInput');
    const panelMembersSearchInput = document.getElementById('panelMembersSearchInput');
    const archivedSearchInput = document.getElementById('archivedSearchInput');

    const crudModal = new bootstrap.Modal(document.getElementById('crudModal'));
    const crudForm = document.getElementById('crudForm');
    const crudModalLabel = document.getElementById('crudModalLabel');
    const modalFullName = document.getElementById('modalFullName');
    const modalRole = document.getElementById('modalRole');
    const modalDepartment = document.getElementById('modalDepartment');
    const modalExpertise = document.getElementById('modalExpertise');

    let isEditing = false;
    let currentEntryId = null;
    let currentEntryRole = null;

    function renderTables() {
        renderData(advisers, advisersTableBody, 'Adviser', 'active');
        renderData(panelMembers, panelMembersTableBody, 'Panel Member', 'active');
        renderData(archivedData, archivedTableBody, null, 'archived');
    }

    function renderData(dataToRender, tableBody, role, viewType) {
        tableBody.innerHTML = '';
        const colspan = (viewType === 'active') ? 4 : 5;
        if (dataToRender.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="${colspan}" class="text-center text-muted">No results found.</td></tr>`;
            return;
        }

        dataToRender.forEach(item => {
            const row = document.createElement('tr');
            let actionsHtml = '';
            let roleCell = '';

            if (viewType === 'active') {
                actionsHtml = `
                    <button class="btn btn-sm btn-warning edit-btn" data-id="${item.id}" data-role="${role}">Edit</button>
                    <button class="btn btn-sm btn-danger delete-btn" data-id="${item.id}" data-role="${role}">Delete</button>
                `;
            } else if (viewType === 'archived') {
                roleCell = `<td>${item.role}</td>`;
                actionsHtml = `
                    <button class="btn btn-sm btn-primary unarchive-btn" data-id="${item.id}">Unarchive</button>
                    <button class="btn btn-sm btn-danger delete-permanent-btn" data-id="${item.id}">Delete Permanently</button>
                `;
            }

            row.innerHTML = `
                <td>${item.fullName}</td>
                <td>${item.department}</td>
                <td>${item.expertise}</td>
                ${roleCell}
                <td>${actionsHtml}</td>
            `;
            tableBody.appendChild(row);
        });
    }

    function handleSearch(event, data, tableBody, role, viewType) {
        const searchTerm = event.target.value.toLowerCase();
        const filteredData = data.filter(item =>
            item.fullName.toLowerCase().includes(searchTerm) ||
            item.department.toLowerCase().includes(searchTerm) ||
            item.expertise.toLowerCase().includes(searchTerm)
        );
        renderData(filteredData, tableBody, role, viewType);
    }

    // CRUD Modal and Form Handlers
    document.getElementById('addNewBtn').addEventListener('click', function() {
        isEditing = false;
        crudModalLabel.textContent = "Add New Entry";
        crudForm.reset();
    });

    crudForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const entry = {
            fullName: modalFullName.value,
            role: modalRole.value,
            department: modalDepartment.value,
            expertise: modalExpertise.value,
        };

        if (isEditing) {
            let targetArray = currentEntryRole === 'Adviser' ? advisers : panelMembers;
            const index = targetArray.findIndex(item => item.id === currentEntryId);
            if (index !== -1) {
                targetArray[index] = { ...targetArray[index], ...entry };
            }
        } else {
            const allData = [...advisers, ...panelMembers, ...archivedData];
            const newId = allData.length > 0 ? Math.max(...allData.map(item => item.id)) + 1 : 1;
            const targetArray = entry.role === 'Adviser' ? advisers : panelMembers;
            targetArray.push({ id: newId, ...entry });
        }
        crudModal.hide();
        renderTables();
    });

    // Handle various button clicks
    document.addEventListener('click', function(event) {
        const target = event.target;
        const id = parseInt(target.getAttribute('data-id'));
        const role = target.getAttribute('data-role');
        let targetArray;

        if (role === 'Adviser') {
            targetArray = advisers;
        } else if (role === 'Panel Member') {
            targetArray = panelMembers;
        }

        if (target.classList.contains('edit-btn')) {
            const entryToEdit = targetArray.find(item => item.id === id);
            isEditing = true;
            currentEntryId = id;
            currentEntryRole = role;
            crudModalLabel.textContent = "Edit Entry";
            modalFullName.value = entryToEdit.fullName;
            modalRole.value = entryToEdit.role;
            modalDepartment.value = entryToEdit.department;
            modalExpertise.value = entryToEdit.expertise;
            crudModal.show();
        } else if (target.classList.contains('delete-btn')) {
            const index = targetArray.findIndex(item => item.id === id);
            if (index !== -1) {
                const itemToArchive = targetArray.splice(index, 1)[0];
                itemToArchive.role = role;
                archivedData.push(itemToArchive);
                renderTables();
            }
        } else if (target.classList.contains('unarchive-btn')) {
            const index = archivedData.findIndex(item => item.id === id);
            if (index !== -1) {
                const unarchivedItem = archivedData.splice(index, 1)[0];
                if (unarchivedItem.role === 'Adviser') {
                    advisers.push(unarchivedItem);
                } else {
                    panelMembers.push(unarchivedItem);
                }
                renderTables();
            }
        } else if (target.classList.contains('delete-permanent-btn')) {
            const confirmation = confirm("Are you sure you want to permanently delete this entry? This action cannot be undone.");
            if (confirmation) {
                const index = archivedData.findIndex(item => item.id === id);
                if (index !== -1) {
                    archivedData.splice(index, 1);
                    renderTables();
                }
            }
        }
    });

    // Search event listeners
    advisersSearchInput.addEventListener('input', (event) => handleSearch(event, advisers, advisersTableBody, 'Adviser', 'active'));
    panelMembersSearchInput.addEventListener('input', (event) => handleSearch(event, panelMembers, panelMembersTableBody, 'Panel Member', 'active'));
    archivedSearchInput.addEventListener('input', (event) => handleSearch(event, archivedData, archivedTableBody, null, 'archived'));

    renderTables();
    </script>
</body>


</html>