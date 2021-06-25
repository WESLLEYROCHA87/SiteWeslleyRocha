<?php include __DIR__ . '/includes/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">

            <nav id="navbar-exemplo3" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <nav class="nav nav-pills flex-column">
                    <a class="nav-link" href="#item-1">Item 1</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1.1</a>
                        <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1.2</a>
                    </nav>
                    <a class="nav-link" href="#item-2">Item 2</a>
                    <a class="nav-link" href="#item-3">Item 3</a>
                    <nav class="nav nav-pills flex-column">
                        <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3.1</a>
                        <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3.2</a>
                    </nav>
                </nav>
            </nav>

            <div data-spy="scroll" data-target="#navbar-exemplo3" data-offset="0">
                <h4 id="item-1">Item 1</h4>
                <p>...</p>
                <h5 id="item-1-1">Item 1.1</h5>
                <p>...</p>
                <h5 id="item-1-2">Item 2.2</h5>
                <p>...</p>
                <h4 id="item-2">Item 2</h4>
                <p>...</p>
                <h4 id="item-3">Item 3</h4>
                <p>...</p>
                <h5 id="item-3-1">Item 3.1</h5>
                <p>...</p>
                <h5 id="item-3-2">Item 3.2</h5>
                <p>...</p>
            </div>

        </div>
    </div>


</div>


<?php include __DIR__ . '/includes/footer.php'; ?>