<main>
    <div class="container margin">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $ciboCane->getImage()?>" class="card-img-top" alt="<?php echo $ciboCane->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $ciboCane->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $ciboCane->category->getSpecies()?></p>
                                <img src="./img/<?php echo $ciboCane->category->getIconCategory()?>" alt="<?php echo $ciboCane->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $ciboCane->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Peso: <strong><?php echo $ciboCane->getWeight() ?> Kg</strong></p>
                        <p class="card-text">Ingredienti: <strong><?php foreach($ciboCane->getIngredients() as $ingredients) echo $ingredients ?></strong></p>
                        <p class="card-text">Data scadenza: <strong><?php echo $ciboCane->getExpirationDate() ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($ciboCane->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $giocoCane->getImage()?>" class="card-img-top" alt="<?php echo $ciboCane->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $giocoCane->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $ciboCane->category->getSpecies()?></p>
                                <img src="./img/<?php echo $giocoCane->category->getIconCategory()?>" alt="<?php echo $giocoCane->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $giocoCane->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $giocoCane->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($giocoCane->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($giocoCane->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $cucciaCane->getImage()?>" class="card-img-top" alt="<?php echo $cucciaCane->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $cucciaCane->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $ciboCane->category->getSpecies()?></p>
                                <img src="./img/<?php echo $cucciaCane->category->getIconCategory()?>" alt="<?php echo $cucciaCane->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $cucciaCane->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Tipo: <strong><?php echo $cucciaCane->getWhere() ?></strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $cucciaCane->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($cucciaCane->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($cucciaCane->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $ciboGatto->getImage()?>" class="card-img-top" alt="<?php echo $ciboGatto->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $ciboGatto->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $ciboGatto->category->getSpecies()?></p>
                                <img src="./img/<?php echo $ciboGatto->category->getIconCategory()?>" alt="<?php echo $ciboGatto->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $ciboGatto->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Peso: <strong><?php echo $ciboGatto->getWeight() ?> Kg</strong></p>
                        <p class="card-text">Ingredienti: <strong><?php foreach($ciboGatto->getIngredients() as $ingredients) echo $ingredients ?></strong></p>
                        <p class="card-text">Data scadenza: <strong><?php echo $ciboGatto->getExpirationDate() ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($ciboGatto->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $giocoGatto->getImage()?>" class="card-img-top" alt="<?php echo $giocoGatto->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $giocoGatto->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $giocoGatto->category->getSpecies()?></p>
                                <img src="./img/<?php echo $giocoGatto->category->getIconCategory()?>" alt="<?php echo $giocoGatto->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $giocoGatto->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $giocoGatto->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($giocoGatto->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($giocoGatto->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 25rem;">
                    <img src="./img/<?php echo $cucciaGatto->getImage()?>" class="card-img-top" alt="<?php echo $cucciaGatto->getImage()?>">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title"><?php echo $cucciaGatto->getTitle()?></h4>
                            <div class="d-flex align-items-center mb-4">
                                <p class="m-0 me-2"><?php echo $cucciaGatto->category->getSpecies()?></p>
                                <img src="./img/<?php echo $cucciaGatto->category->getIconCategory()?>" alt="<?php echo $cucciaGatto->category->getIconCategory()?>" class="icon">
                            </div>
                        </div>
                        <p class="card-text">Prezzo: <strong><?php echo $cucciaGatto->getPrice() ?>&euro;</strong></p>
                        <p class="card-text">Tipo: <strong><?php echo $cucciaGatto->getWhere() ?></strong></p>
                        <p class="card-text">Taglia: <strong><?php echo $cucciaGatto->getSize() ?> cm</strong></p>
                        <p class="card-text">Materiali: <strong><?php foreach($cucciaGatto->getMaterials() as $materials) echo $materials ?></strong></p>
                        <p class="card-text">
                            <?php
                                if($cucciaGatto->getAvailable()) {
                                    echo "<span class='text-success'><strong>Disponibile</strong></span>";
                                } else {
                                    echo "<span class='text-danger'><strong>Non Disponibile</strong></span>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>