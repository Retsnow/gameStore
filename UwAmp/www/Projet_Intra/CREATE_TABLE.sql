CREATE TABLE emprunt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usager_id INT,
    periodique_id INT,
    FOREIGN KEY (usager_id) REFERENCES usager(id),
    FOREIGN KEY (periodique_id) REFERENCES periodique(id)
);