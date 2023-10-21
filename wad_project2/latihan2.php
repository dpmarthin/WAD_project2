<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 2 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="angkaInput" class="form-label">Angka:</label>
                <input type="number" class="form-control" id="angkaInput" placeholder="Masukkan angka">
            </div>

            <div class="mb-3">
                <label for="dropdownInput" class="form-label">Dropdown:</label>
                <select class="form-select" id="dropdownInput">
                    <option value="option1">Opsi 1</option>
                    <option value="option2">Opsi 2</option>
                    <option value="option3">Opsi 3</option>
                </select>
            </div>

            <button type="button" class="btn btn-primary" id="hitungButton">Hitung</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
