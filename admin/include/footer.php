<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://penguintechnology.in/" target="_blank">Penguin Technology</a>
            2021
        </p>
    </div>
</div>

<div id="snackbar"></div>
<div class="loader-container">
    <div class="loader">
    </div>
</div>

<div id="deleteConfirm" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <button type="button" class="close delete_close" data-dismiss="modal">&times;</button>
            <div class="modal-body" style="margin-bottom: 3%;margin-top: 3%;">
                <h3 class="text-center">Are you sure want to Delete ?</h3>
            </div>
            <div class="action-btns">
                <button type="button" class="btn btn-warning" ng-click="deleteItem()" >Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>

    </div>
</div>