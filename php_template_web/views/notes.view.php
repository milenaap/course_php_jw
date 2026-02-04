<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:text-xl">

                        <?= htmlspecialchars($note['body']) ?>

                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p>
            <a href="/notes/create" class="text-blue-500 hover:underline mt-6">Create Note</a>
        </p>
    </div>
</main>
</div>

<?php require('partials/footer.php') ?>