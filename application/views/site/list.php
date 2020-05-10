<div class="col-xs-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title fa fa-users"><b> Registration of Promoters / Chawl Owner <!-- ({{name}}) --></b></h3>
            <button type="button" class="btn btn-xs btn-primary pull-right" onclick="site.listview.newsite($(this));"
            style="margin-right: 5px;">
            <label class="fa fa-plus label-btn-icon"></label>
            &nbsp;<label class="label-btn-fonts">Add a new site</label>
            {{{add_template}}}
        </button>
    </div>
    <div id="site_form_container"></div>
</div>
<div clasPs="box">
    <div id="site_table_container"></div>
</div>
</div>
<form target="_blank" id="site_sparsh_pdf_form" action="sparsh/generate_pdf" method="post">
    <input type="hidden" id="site_sparsh_id_for_pdf" name="sparsh_id_for_pdf">
</form>