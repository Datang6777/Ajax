<?php
?>
<div cass="modal fade" id="addDialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" id="addTitle">添加日志</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="name">
							Name:
						</label>
						<input class="form-control" type="text" name="name" id="name" />
					</div>
					<div class="form-group">
						<label for="ip">
							IP:
						</label>
						<input class="form-control" type="text" name="ip" id="ip" />
					</div>
					<div class="form-group">
						<label for="ctime">
							Time:
						</label>
						<input class="form-control" type="text" name="ctime" id="ctime" />
					</div>

				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success" id="btnAdd">Add</button>
				<button class="btn btn-default" id="btnClose" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>

</div>