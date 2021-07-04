@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.cdr.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Cdr">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.calldate') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.clid') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.src') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.dst') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.dcontext') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.channel') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.dstchannel') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.lastapp') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.lastdata') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.duration') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.billsec') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.disposition') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.amaflags') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.accountcode') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.uniqueid') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.userfield') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.peeraccount') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.linkedid') }}
                        </th>
                        <th>
                            {{ trans('cruds.cdr.fields.sequence') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cdrs as $key => $cdr)
                        <tr data-entry-id="{{ $cdr->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $cdr->id ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->calldate ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->clid ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->src ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->dst ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->dcontext ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->channel ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->dstchannel ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->lastapp ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->lastdata ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->duration ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->billsec ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->disposition ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->amaflags ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->accountcode ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->uniqueid ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->userfield ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->peeraccount ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->linkedid ?? '' }}
                            </td>
                            <td>
                                {{ $cdr->sequence ?? '' }}
                            </td>
                            <td>



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 2, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-Cdr:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection