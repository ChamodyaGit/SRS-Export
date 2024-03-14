<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <thead>
        <tr>
            <th class="logo-area" width="20%" align="left"
                style="vertical-align: top;display: block;margin-left: auto;">
                @if (isset($image_id))
                    @if ($image_id == 0 || $image_id == 'xxx')
                    @else
                        <img src="{{ $image->name }}" alt="MySales" class="brand-logo me-2"
                            style="width: 100%;height: auto; ">
                    @endif
                @endif
            </th>
            <th style="text-align: left;">

            </th>
            <th style="text-align: right;vertical-align:text-top;">

            </th>
        </tr>
    </thead>
</table>
