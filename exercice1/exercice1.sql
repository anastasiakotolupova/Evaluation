SELECT users.firstname, users.lastname FROM users
LEFT JOIN articles ON users.id = articles.id_user
WHERE articles.id = 10