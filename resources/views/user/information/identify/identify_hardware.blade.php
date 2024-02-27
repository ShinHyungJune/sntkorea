<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <!-- 상단 헤더 -->
    <header id="header">
        @include('user.components.header')
    </header>
    <!-- //상단 헤더 -->

    <!-- 좌측 메뉴 -->
    <div id="gnb">
        @include('user.components.sub_gnb')
    </div>
    <!-- //좌측 메뉴 -->

    <!-- 대시보드 -->
    <div class="dashboard">
        <div class="subpage">
            <div class="subpage-table-container">
                <div class="edit-date col-group">
                    <p class="txt">
                        2023-12-12 12:41:57
                    </p>
                    <p class="txt">
                        Administrators
                    </p>
                </div>
                <div class="subpage-table-btn-wrap col-group">
                    <a href="{{ route('hardware.create') }}" class="subpage-table-btn">
                        Add
                    </a>
                    <form action="" id="delete">
                        @csrf
                        @method('DELETE')
                        <button class="subpage-table-btn" type="button" onclick="showModal()">
                            Delete
                        </button>
                    </form>
                    <button class="subpage-table-btn" id="modify">
                        Modify
                    </button>
                    <form action="{{ route('hardware.import') }}" method="post" enctype="multipart/form-data" id="import">
                        @csrf
                        <input type='file' id='file_upload' accept=".xlsx, .xls, .csv" name="file">
                        <label for="file_upload" class="subpage-table-btn">
                            Import
                        </label>
                    </form>
                    <a href="{{ route('hardware.export') }}" class="subpage-table-btn">
                        Export
                    </a>
                    <button class="subpage-table-btn" onclick="window.print()">
                        Print
                    </button>
                </div>
                <div class="subpage-table-wrap">
                    <table class="subpage-table identify-table identify-hardware-table">
                        <colgroup>
                            <col width="10%">
                            <col width="15%">
                            <col width="5%">
                            <col width="6%">
                            <col width="3%">
                            <col width="15%">
                            <col width="12%">
                            <col width="5%">
                            <col width="3%">
                            <col width="3%">
                            <col width="3%">
                            <col width="3%">
                            <col width="3%">
                            <col width="14%">
                        </colgroup>
                        <thead>
                        <!-- <tr>
                                    <th colspan="4" style="text-align: center;">
                                        System Information
                                    </th>
                                    <th colspan="9" style="text-align: center;">
                                        Hardware components
                                    </th>
                                </tr> -->
                        <tr>
                            <th>System Category</th>
                            <th>System Name</th>
                            <th>Supplier</th>
                            <th>Model</th>
                            <th></th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Model</th>
                            <th>Q'ty</th>
                            <th>Ver.</th>
                            <th>RJ45</th>
                            <th>USB</th>
                            <th>Serial</th>
                            <th>IP Address</th>
                        </tr>
                        </thead>
                        @foreach($hardwares as $key => $hardware)
                            <tbody>
                            @foreach($hardware as $index => $value)
                                @if($index == 0)
                                    <tr>
                                        <td rowspan="{{ count($hardware) }}">{{ $key }}</td>
                                        <td rowspan="{{ count($hardware) }}">{{ $value->system->name }}</td>
                                        <td rowspan="{{ count($hardware) }}">{{ $value->system->supplier }}</td>
                                        <td rowspan="{{ count($hardware) }}">{{ $value->system->model ?: '-' }}</td>
                                        <td>
                                            <label for="{{ $value->id }}" class="check-label">
                                                <input type="checkbox" class="check-input" id="{{ $value->id }}">
                                                <div class="check-item">
                                                    <i class="xi-check"></i>
                                                </div>
                                            </label>
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->location }}</td>
                                        <td>{{ $value->model ?: '-' }}</td>
                                        <td>{{ $value->q_type ?: '-' }}</td>
                                        <td>{{ $value->version ?: '-' }}</td>
                                        <td>{{ $value->rj45 ?: '-' }}</td>
                                        <td>{{ $value->usb ?: '-' }}</td>
                                        <td>{{ $value->serial ?: '-' }}</td>
                                        <td>{{ $value->ip_address ?: '-' }}</td>
                                    </tr>
                                @else
                                    <tr>
                                        <td>
                                            <label for="{{ $value->id }}" class="check-label">
                                                <input type="checkbox" class="check-input" id="{{ $value->id }}">
                                                <div class="check-item">
                                                    <i class="xi-check"></i>
                                                </div>
                                            </label>
                                        </td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->location }}</td>
                                        <td>{{ $value->model ?: '-' }}</td>
                                        <td>{{ $value->q_type ?: '-' }}</td>
                                        <td>{{ $value->version ?: '-' }}</td>
                                        <td>{{ $value->rj45 ?: '-' }}</td>
                                        <td>{{ $value->usb ?: '-' }}</td>
                                        <td>{{ $value->serial ?: '-' }}</td>
                                        <td>{{ $value->ip_address ?: '-' }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
<!-- alert 팝업 -->
<div class="modal-container modal-alert" style="display: none;">
    <div class="modal-wrap modal-alert-wrap warning">

        <div class="modal-alert-txt-wrap">
            <div class="modal-alert-title-wrap row-group">
                <i class="xi-warning icon"></i>
                <p class="modal-alert-title">
                    Warning
                </p>
            </div>

            <p class="modal-alert-txt">
                If deleted, the data cannot be recovered. <br>
                Are you sure you want to delete?
            </p>
        </div>

        <div class="dashboard-form-btn-wrap col-group">
            <button class="dashboard-form-btn submit-btn" onclick="deleteUtility()">
                Delete
            </button>
            <button class="dashboard-form-btn cancel-btn" onclick="hideModal()">
                Cancel
            </button>
        </div>
    </div>
</div>
<script src="{{ asset('js/utility.js') }}"></script>
<script>
    document.getElementById('modify').addEventListener('click', function () {
        let checkedCheckbox = document.querySelector('.check-input:checked');
        if (checkedCheckbox) {
            window.location.href = `{{ route('hardware.edit', ':id') }}`.replace(':id', checkedCheckbox.id)
        }
    });
</script>
<script>
    function deleteUtility() {
        let deleteForm = document.getElementById('delete');
        let checkedCheckbox = document.querySelectorAll('.check-input:checked');
        let deleteId = Array.from(checkedCheckbox).map(checkbox => checkbox.id);

        deleteId.forEach(id => {
            let deleteInput = document.createElement('input');
            deleteInput.setAttribute('type', 'hidden');
            deleteInput.setAttribute('name', 'id[]');
            deleteInput.value = id;
            deleteForm.appendChild(deleteInput);
        })

        let formData = new FormData(deleteForm);
        fetchUtility("{{ route('hardware.destroy') }}", formData)
    }
</script>
<script>
    document.getElementById('file_upload').addEventListener('change', function () {
        document.getElementById('import').submit();
    });
</script>
</body>
</html>
