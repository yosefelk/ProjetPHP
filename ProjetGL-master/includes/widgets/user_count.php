

 <div class="widget">
                <h2>Utilisateur</h2>
                <div class="inner">
				<?php $user_count = user_count();
				$suffix = ($user_count != 1) ? 's' : '';
				?>
			tu as <?php echo user_count(); ?> user<?php echo $suffix?> registrer !
                </div>
            </div>
