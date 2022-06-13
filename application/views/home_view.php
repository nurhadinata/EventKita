<content>
    <h3>Daftar Event</h3>
    <?php foreach ($events as $event): ?>
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($event->poster).'" height="200"/>';?>
        <h4><?php echo "Judul : $event->nama_event"; ?></h4>
        <p><?php echo $event->detail_event; ?></p>
    <?php endforeach;?>
    
</content>
</body>
</html>
