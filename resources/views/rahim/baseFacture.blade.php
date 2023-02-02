<html>
<head>
    <style>
      /* Style du formulaire */
      form {
        width: 500px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
      }

      /* Style des étiquettes */
      label {
        display: block;
        margin-bottom: 10px;
      }

      /* Style des entrées de formulaire */
      input[type="text"], input[type="email"], input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      /* Style du bouton de soumission */
      input[type="submit"] {
        padding: 10px 20px;
        background-color: #ddd;
        border: 0;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
</head>
<body>
<h1>Formulaire de facturation</h1>
<form>
    <label for="nom_complet">Nom complet :</label>
    <input type="text" id="nom_complet" name="nom_complet">

    <label for="adresse">Adresse :</label>
    <input type="text" id="adresse" name="adresse">

    <label for="cni">CNI :</label>
    <input type="text" id="cni" name="cni">


    <label for="cni">Numéro de téléphone :</label>
    <input type="text" id="cni" name="cni">

    <input type="submit" value="Soumettre">
</form>
</body>
</html>
