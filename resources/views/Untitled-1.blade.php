<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Tanpa Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EventHub</a>

            <!-- Dropdown Event -->
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="iksalEventDropdown"
                    data-bs-toggle="dropdown">
                    📅 Lihat Event
                </button>
                <ul class="dropdown-menu" id="iksalEventList">
                    <li><span class="dropdown-item">Memuat event...</span></li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#iksalEventDropdown").on("click", function() {
                $.ajax({
                    url: "/events", // Memanggil route Laravel
                    type: "GET",
                    success: function(response) {
                        let eventList = $("#iksalEventList");
                        eventList.empty(); // Hapus data lama

                        if (response.length > 0) {
                            response.forEach(function(event) {
                                eventList.append(
                                    `<li><a class="dropdown-item" href="#">${event.name} - ${event.date}</a></li>`
                                );
                            });
                        } else {
                            eventList.append(
                                `<li><span class="dropdown-item">Tidak ada event</span></li>`
                            );
                        }
                    },
                    error: function() {
                        $("#iksalEventList").html(
                            '<li><span class="dropdown-item text-danger">Gagal memuat event</span></li>'
                        );
                    }
                });
            });
        });
    </script>

</body>

</html>
