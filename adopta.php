<?php
	require "header.php";
?>

	<main>
		<!--============= CONTENT ============= -->
			<td id="content" align="center" valign="top" bgcolor="white">
			<h2>ADOPTA</h2>
			<div class="form-adoptie">
				<p>
							Daca doriti sa <span style="color: red;">adoptati</span> va rugam sa completati urmatorul formular pentru a trimite o cerere de adoptie care va fi verificata.
						</p>
			<form name="Form">
					<div  class="parinte">
					<div class="option">
						<label for="nume">Nume:</label>
						<input type="text" name="nume" id="nume" class="nume" required="">
					</div>
					<div class="option">
						<label for="prenume">Prenume:</label>
						<input type="text" name="prenume" id="prenume" required="">

					</div>
					<div class="option">
						<label>Sexul:</label>

						<label for="m">Masculin</label>
						<input type="radio" name="sexul" value="masculin" id="m">

						<label for="f">Feminin</label>
						<input type="radio" name="sexul" value="feminin" id="f">
					</div>
					<div class="option">
						<label for="studii">Studii:</label>
						<select id="studii">
							<option value="facultate">Facultate</option>
							<option value="liceu">Liceu</option>
						</select>
					</div>
					<div class="option">
						<label>Sunt angajat:</label>

						<label for="lucrez">Da</label>
						<input type="radio" name="angajat" value="Da" id="lucrez">

						<label for="nulucrez">Nu</label>
						<input type="radio" name="angajat" value="Nu" id="nulucrez">
					</div>
							<div class="option">
						<label>Vreau sa adopt:</label>

						<label for="caine">Caine</label>
						<input type="radio" name="animal" value="caine" id="caine">

						<label for="pisica">Pisica</label>
						<input type="radio" name="animal" value="pisica" id="pisica">
					</div>
					<div class="option">
						<p>MESAJ:</p>
						<textarea rows="4" cols="30" id="obs"></textarea>
					</div>
					<div class="option">
						<input type="button" value="TRIMITE" onclick="show()">
					</div>
					<p id="mesaj"></p>
				</div>
			</form>
		</div>
			</td>
	</main>

<?php
	require "footer.php";
?>