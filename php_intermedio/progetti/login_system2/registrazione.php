<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrazione Utente</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow">

                    <div class="card-header bg-primary text-white">

                        <h2 class="text-center mb-0">
                            📝 Registrazione Utente
                        </h2>

                    </div>

                    <div class="card-body">

                        <form action="salvaUtente.php" method="POST">

                            <div class="row">

                                <!-- Nome -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Nome
                                    </label>

                                    <input type="text" name="nome" class="form-control" required>

                                </div>

                                <!-- Cognome -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Cognome
                                    </label>

                                    <input type="text" name="cognome" class="form-control" required>

                                </div>

                            </div>

                            <!-- Email -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Email
                                </label>

                                <input type="email" name="email" class="form-control" required>

                            </div>

                            <!-- Password -->
                            <div class="mb-3">

                                <label class="form-label">
                                    Password
                                </label>

                                <input type="password" name="password" class="form-control" required>

                            </div>

                            <div class="row">

                                <!-- Sesso -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Sesso
                                    </label>

                                    <select name="sesso" class="form-select">

                                        <option value="M">
                                            Maschio
                                        </option>

                                        <option value="F">
                                            Femmina
                                        </option>

                                    </select>

                                </div>

                                <!-- Data -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Data di nascita
                                    </label>

                                    <input type="date" name="dataNascita" class="form-control" required>

                                </div>

                            </div>

                            <div class="row">

                                <!-- Città -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Città
                                    </label>

                                    <input type="text" name="citta" class="form-control" required>

                                </div>

                                <!-- Nazionalità -->
                                <div class="col-md-6 mb-3">

                                    <label class="form-label">
                                        Nazionalità
                                    </label>

                                    <input type="text" name="nazionalita" class="form-control" required>

                                </div>

                            </div>

                            <!-- Ruolo -->
                            <div class="mb-4">

                                <label class="form-label">
                                    Ruolo
                                </label>

                                <select name="ruolo" class="form-select">

                                    <option value="studente">
                                        Studente
                                    </option>

                                    <option value="docente">
                                        Docente
                                    </option>

                                    <option value="admin">
                                        Amministratore
                                    </option>

                                </select>

                            </div>

                            <div class="d-grid">

                                <button type="submit" class="btn btn-primary btn-lg">

                                    Registrati

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>