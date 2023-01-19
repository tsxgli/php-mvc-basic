<?php include __DIR__ . '/../header.php'; ?>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Orders</h1>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Movie ID</th>
                    <th>Date Ordered</th>
                </tr> 
            </thead>
            <tbody>
                <?php foreach ($model as $order) {
                   echo '<tr>';
                   echo '<td>' . $order->get_id() . '</td>';
                   echo '<td>' . $order->getUserID() . '</td>';
                   echo '<td>' . $order->getMovieID() . '</td>';
                   echo '<td>' . $order->getDateOrdered() . '</td>';
                   echo '</tr>';
                } ?>
            </tbody>
        </table>
    </div>
</body>
<?php include __DIR__ . '/../footer.php'; ?>
