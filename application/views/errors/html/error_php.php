<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div style="padding: 10px;margin:0 0 10px 0;" class="row col-12 border border-danger">

	<h4 class="text-danger">A PHP Error was encountered</h4>

	<div class="row">
		<div class="col-12">
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><strong>Severity: <span class="text-primary"><?php echo $severity; ?></span></strong></li>
				<li class="list-group-item"><strong>Message: <span class="text-danger"><?php echo $message; ?></span></strong></li>
				<li class="list-group-item"><strong>Filename: <span class="text-danger"><?php echo $filepath; ?></span></strong></li>
				<li class="list-group-item"><strong>Line Number: <span class="text-danger"><?php echo $line; ?></span></strong></li>
			</ul>
		</div>


		<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE) : ?>

			<div class="col-12 mt-3">
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button collapsed" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><strong>Backtrace:</strong></button>
						</h2>
						<div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-coreui-parent="#accordionExample">
							<div class="accordion-body">
								<?php foreach (debug_backtrace() as $error) : ?>

									<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0) : ?>

										<p style="margin-left:10px">
											File: <strong class="text-primary"><?php echo $error['file'] ?></strong><br />
											Line: <strong class="text-primary"><?php echo $error['line'] ?></strong><br />
											Function: <strong class="text-danger"><?php echo $error['function'] ?></strong>
										</p>

									<?php endif ?>

								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php endif ?>
	</div>

</div>