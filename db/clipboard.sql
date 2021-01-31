CREATE TABLE comments (
    id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    post TEXT,
    vote_for MEDIUMINT,
    vote_against MEDIUMINT,
    publication_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    user_id MEDIUMINT UNSIGNED NOT NULL,
    topic_id MEDIUMINT UNSIGNED NOT NULL
    PRIMARY KEY (id)
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (topic_id) REFERENCES topics(id)

)

CREATE TABLE topics (
    id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
    picture VARCHAR(255),
    title VARCHAR(255),
    topic_description TEXT,
    nb_comment MEDIUMINT,
    vote_for MEDIUMINT,
    vote_against MEDIUMINT,
    published TINYINT(1),
    creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP NULL,
    PRIMARY KEY (id)

)

