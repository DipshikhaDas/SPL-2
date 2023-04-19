<div id="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card col-lg-12">
                <div class="jsgrid-table-panel">
                    <div id="jsGrid" class="jsgrid p-4" style="position: relative; height: 100%; width: 100%; ">
                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="jsgrid-table">
                                    <tbody>
                                        <tr class="jsgrid-header-row">
                                            <th class="jsgrid-header-cell jsgrid-header-sortable jsgrid-header-sort jsgrid-header-sort-desc"
                                                style="width: 150px;">Name</th>
                                            <th class="jsgrid-header-cell  jsgrid-header-sortable" style="width: 150px;">
                                                Email</th>

                                            @foreach ($roles as $role)
                                                @if ($role->name == 'superAdmin')
                                                    @role('superAdmin')
                                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                                            style="width: 80px;">
                                                            Super Admin
                                                        </th>
                                                    @endrole
                                                @elseif ($role->name == 'journalAdmin')
                                                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                                        style="width: 80px;">
                                                        Journal Admin
                                                    </th>
                                                @elseif ($role->name == 'editor')
                                                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                                        style="width: 80px;">
                                                        Editor
                                                    </th>
                                                @elseif ($role->name == 'reviewer')
                                                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                                        style="width: 80px;">
                                                        Reviewer
                                                    </th>
                                                @elseif ($role->name == 'author')
                                                    <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable"
                                                        style="width: 80px;">
                                                        Author
                                                    </th>
                                                @endif
                                            @endforeach

                                        </tr>
                                        @foreach ($users as $user)
                                            <tr class="jsgrid-row">
                                                <td class="jsgrid-cell">
                                                    {{ $user->name }}
                                                </td>
                                                <td class="jsgrid-cell">
                                                    {{ $user->email }}
                                                </td>

                                                @foreach ($roles as $role)
                                                    @if ($role->name == 'superAdmin')
                                                        @role('journalAdmin')
                                                            @continue
                                                        @endrole
                                                    @endif
                                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 80px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="roles[]"
                                                                value="{{ $role->name }}"
                                                                {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                                                        </div>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            <div class="jsgrid-pager-container" style="display: block;">
                                <div class="jsgrid-pager">Pages: <span
                                        class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                            href="javascript:void(0);">First</a></span> <span
                                        class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a
                                            href="javascript:void(0);">Prev</a></span> <span
                                        class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span
                                        class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span><span
                                        class="jsgrid-pager-nav-button"><a href="javascript:void(0);">...</a></span>
                                    <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span>
                                    <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span>
                                    &nbsp;&nbsp;
                                    1 of 7
                                </div>
                            </div>
                            <div class="jsgrid-load-shader"
                                style="display: none; position: absolute; inset: 0px; z-index: 1000;">
                            </div>
                            <div class="jsgrid-load-panel"
                                style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">
                                Please,
                                wait...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
