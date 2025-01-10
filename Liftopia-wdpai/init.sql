CREATE TABLE users (
                       id SERIAL PRIMARY KEY,
                       email VARCHAR(255) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL,
                       name VARCHAR(255),
                       surname VARCHAR(255),
                       date_of_birth DATE,
                       nickname VARCHAR(255),
                       avatar_path VARCHAR(255)
);

INSERT INTO users (email, password, name, surname, date_of_birth, nickname, avatar_path)
VALUES
    ('adam.nowak@test.pl', '$2y$10$1ZRGiK9ZbGsx5R1A0ZwWReQ10RhsK/NhQmvZb/5HZdYPfGKH1HOgK', 'Adam', 'Nowak', '1990-01-10', 'adnowak', '/public/assets/man.png'),
    ('anna.kowalska@test.pl', '$2y$10$VfBt9xehnkUzIqLqD8syS.ymDLl.Dl5DbBcOj/FgtiTqce5VdPjPO', 'Anna', 'Kowalska', '1992-03-15', 'annakowalska', '/public/assets/woman.png'),
    ('michael.smith@test.pl', '$2y$10$zgERBCHheAcQJbbrJpF67Tt9oGj6w6cS2p2ACBlmzyJQkk1PVDHRm', 'Michael', 'Smith', '1988-07-21', 'mikesmith', '/public/assets/man.png'),
    ('julia.jones@test.pl', '$2y$10$T50O3yBKhxy3m4bH3nnp2OBljQkNxRzwwbAkayS0ZmRUvY6WpJzWS', 'Julia', 'Jones', '1995-02-28', 'julia_jones', '/public/assets/woman.png'),
    ('kamil.martin@test.pl', '$2y$10$tpRQpcD7OQ6EwScbmEYUn0J3s2oWq04x/HEjSHpI9cIljeZsoRii2', 'Kamil', 'Martin', '1993-06-30', 'kamilmartin', '/public/assets/man.png'),
    ('olga.wozniak@test.pl', '$2y$10$N1J7JTyfNEpE6O4VYwv3y.ez07dkMwFe09lSTZ5hnEkKkltKNh9TO', 'Olga', 'Wozniak', '1987-11-15', 'olgawozniak', '/public/assets/woman.png'),
    ('david.miller@test.pl', '$2y$10$ZZX.BGe1Kh8QxCuEXBR1meYkQQwKKJ0fGpGMJpK6H7PVaj6LqVG1i', 'David', 'Miller', '1991-09-03', 'davidmiller', '/public/assets/man.png'),
    ('emily.davis@test.pl', '$2y$10$g9eVrr8w5FpxyHwU9VX0xepoy58A8UuV7BLFbd0nChK4xH/Z6tVjO', 'Emily', 'Davis', '1994-12-25', 'emily_davis', '/public/assets/woman.png'),
    ('joseph.thompson@test.pl', '$2y$10$fgJ16y3wDBvn5Vh1MkD3KE2e0hVKZQnKMgXdycx61vgz9O2dmIbdC', 'Joseph', 'Thompson', '1986-05-05', 'josepthompson', '/public/assets/man.png'),
    ('lisa.martinez@test.pl', '$2y$10$XsOZtvNVuF3RoF8OXY61z5q.zFOOZG6sZc5ERyLHv0lxr5W3h5.1m', 'Lisa', 'Martinez', '1992-08-14', 'lisamartinez', '/public/assets/woman.png'),
    ('michael.angelo@test.pl', '$2y$10$zgERBCHheAcQJbbrJpF67Tt9oGj6w6cS2p2ACBlmzyJQkk1PVDHRm', 'Michael', 'Angelo', '1988-07-21', 'mikey', '/public/assets/man.png'),
    ('test@test.pl', '$2y$10$XsOZtvNVuF3RoF8OXY61z5q.zFOOZG6sZc5ERyLHv0lxr5W3h5.1m', 'Test', 'Test', '1992-08-14', 'test', '/public/assets/man.png');




CREATE TABLE sections (
                          id SERIAL PRIMARY KEY,
                          name VARCHAR(255) NOT NULL,
                          description TEXT,
                          icon_class VARCHAR(255)
);


INSERT INTO sections (name, description, icon_class) VALUES
                                                         ('Strength Training Techniques', 'Share tips on effective strength training exercises, proper form, and muscle-building strategies.', 'ri-arrow-up-fill'),
                                                         ('Nutrition for Fitness Goals', 'Discuss how to fuel your workouts with the right diet, supplements, and meal planning.', 'ri-store-2-line'),
                                                         ('Cardio Workouts for Endurance', 'Explore various cardio routines to improve stamina, heart health, and overall endurance.', 'ri-heart-pulse-line'),
                                                         ('Flexibility and Mobility Training', 'Talk about stretching routines, yoga, and exercises that improve flexibility and prevent injury.', 'ri-shuffle-fill'),
                                                         ('Martial Arts Training', 'Discuss martial arts techniques, training methods, and how they contribute to fitness and self-defense.', 'ri-shake-hands-line'),
                                                         ('Fitness Motivation and Mindset', 'Exchange ideas on staying motivated, overcoming plateaus, and keeping a positive fitness mindset.', 'ri-brain-line');



CREATE TABLE topics (
                        id SERIAL PRIMARY KEY,
                        section_id INT NOT NULL,
                        title VARCHAR(255) NOT NULL,
                        created_by INT NOT NULL,
                        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                        posts INT DEFAULT 1,
                        FOREIGN KEY (section_id) REFERENCES sections(id) ON DELETE CASCADE,
                        FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO topics (section_id, title, created_by, posts)
VALUES
    (1, 'Best Exercises for Building Strength', 1, 5),
    (1, 'How to Improve Your Squat Form', 1, 5),
    (2, 'What to Eat Before and After a Workout', 2, 5),
    (2, 'The Importance of Protein in Muscle Growth', 2, 5),
    (3, 'HIIT vs Long Distance Running: Which Is Better?', 3, 5),
    (3, 'Cardio Workouts to Improve Stamina', 3, 5),
    (4, 'Stretching Routines for Flexibility', 4, 5),
    (4, 'How to Increase Your Mobility for Better Performance', 4, 5),
    (5, 'The Basics of Brazilian Jiu-Jitsu', 5, 5),
    (5, 'Top Martial Arts for Self-Defense', 5, 5),
    (6, 'How to Stay Motivated During a Fitness Plateau', 6, 5),
    (6, 'Building a Positive Mindset for Long-Term Success', 6, 5),
    (1, 'Deadlift Variations', 2, 4),
    (1, 'Squat Tips', 3, 6),
    (2, 'Pre-Workout Nutrition', 2, 6),
    (2, 'Protein Importance', 5, 6),
    (3, 'HIIT vs Running', 6, 5),
    (3, 'Cardio for Endurance', 7, 6),
    (4, 'Stretching Routine', 8, 5),
    (4, 'Mobility Exercises', 9, 6),
    (5, 'BJJ Basics', 10, 4),
    (5, 'Self-Defense Arts', 11, 5),
    (6, 'Motivation Tips', 12, 6),
    (6, 'Overcoming Plateaus', 3, 5);


CREATE TABLE posts (
                       id SERIAL PRIMARY KEY,
                       topic_id INT NOT NULL,
                       content TEXT NOT NULL,
                       created_by INT NOT NULL,
                       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       FOREIGN KEY (topic_id) REFERENCES topics(id) ON DELETE CASCADE,
                       FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (1, 'What are the best exercises for building strength?', 1),
    (1, 'I recommend focusing on compound lifts such as squats, deadlifts, and bench presses for building overall strength.', 2),
    (1, 'You should also incorporate accessory lifts like rows, overhead press, and lunges to target different muscle groups.', 3),
    (1, 'Make sure to progressively overload to build strength effectively.', 4),
    (1, 'Form is key. Never compromise form just to lift heavier weights.', 5);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (2, 'What are the best tips for improving squat form?', 1),
    (2, 'To improve squat form, make sure your knees track over your toes and your chest stays up.', 6),
    (2, 'Stretching and mobility work for the hips and ankles will help you improve your squat depth.', 7),
    (2, 'I find it helpful to widen my stance to reach deeper in the squat.', 8),
    (2, 'Using a weightlifting belt can provide more support for heavy squats.', 9);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (3, 'What should I eat before and after a workout?', 2),
    (3, 'Carbs should be consumed before a workout for sustained energy, and protein after for muscle recovery.', 4),
    (3, 'Hydration is key before and after workouts to prevent dehydration and muscle cramps.', 5),
    (3, 'I always have a banana before my workout for a quick energy boost.', 6),
    (3, 'A protein shake post-workout helps with muscle repair and recovery.', 7);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (4, 'Why is protein so important for muscle growth?', 3),
    (4, 'Protein is crucial for muscle repair after workouts. Make sure you’re consuming enough daily.', 2),
    (4, 'I aim for around 2g of protein per kilogram of body weight every day.', 4),
    (4, 'Whey protein is a good source of protein post-workout, but plant-based options like soy are also great.', 5),
    (4, 'You don’t need to take supplements. You can get protein from foods like chicken, eggs, and lentils.', 6);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (5, 'Is HIIT or long-distance running better for building endurance?', 3),
    (5, 'HIIT is great for burning fat and improving cardiovascular endurance in a short amount of time.', 6),
    (5, 'Long-distance running is great for building stamina and overall cardiovascular health.', 8),
    (5, 'HIIT workouts are more time-efficient compared to long-distance running.', 9),
    (5, 'I enjoy both, depending on my goals for the week. Both are valuable in their own way.', 10);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (6, 'What are the best cardio workouts to improve stamina?', 3),
    (6, 'Running, cycling, and swimming are excellent cardio options for building stamina.', 7),
    (6, 'Interval training can also help boost your stamina, as it pushes your body to perform at higher intensities.', 8),
    (6, 'I personally prefer HIIT for improving stamina since it challenges my endurance at different levels.', 9),
    (6, 'Don’t forget to rest between intense sessions to avoid burnout and injury.', 10);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (7, 'What are some effective stretching routines to improve flexibility?', 4),
    (7, 'Static stretching after workouts helps improve flexibility, especially for your hamstrings and lower back.', 5),
    (7, 'Yoga is also great for improving flexibility and preventing injuries.', 6),
    (7, 'I stretch for at least 15 minutes after my workouts to improve flexibility.', 8),
    (7, 'Foam rolling can help release tight muscles and improve range of motion.', 9);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (8, 'What exercises or techniques can help increase mobility?', 9),
    (8, 'Incorporating dynamic stretching before workouts helps improve mobility and prepare your muscles for movement.', 8),
    (8, 'Try adding exercises like hip openers and shoulder mobility drills to your routine.', 7),
    (8, 'I find yoga to be great for both mobility and overall body awareness.', 10),
    (8, 'Mobilizing the hips and ankles is key for better performance in squats and deadlifts.', 6);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (9, 'What should beginners know about Brazilian Jiu-Jitsu?', 10),
    (9, 'Focus on learning the basic positions and submissions before worrying about advanced techniques.', 2),
    (9, 'Drilling techniques consistently helps develop muscle memory and improves your BJJ game.', 3),
    (9, 'Don’t forget to work on your cardio—BJJ is very demanding on the cardiovascular system.', 4),
    (9, 'You can learn a lot from rolling with different training partners, as everyone has a different style.', 5);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (10, 'What are the top martial arts for self-defense?', 11),
    (10, 'Brazilian Jiu-Jitsu and Krav Maga are great for self-defense because they focus on real-world scenarios.', 12),
    (10, 'Boxing and Muay Thai are excellent for striking, and can help protect yourself in close quarters.', 6),
    (10, 'I’ve heard that Judo is also great for self-defense, especially for throws and joint locks.', 7),
    (10, 'You should also learn how to defend against weapons, not just hand-to-hand combat.', 8);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (11, 'How do you stay motivated when you hit a fitness plateau?', 12),
    (11, 'Try changing up your workout routine to break the monotony and challenge your body in new ways.', 6),
    (11, 'Tracking your progress with numbers (like weight lifted or times run) can motivate you to push through plateaus.', 7),
    (11, 'Set smaller, achievable goals to give yourself a sense of accomplishment along the way.', 9),
    (11, 'Sometimes, taking a rest week to recover and reset can also help you get back on track.', 10);


INSERT INTO posts (topic_id, content, created_by)
VALUES
    (12, 'How can I build a positive mindset for long-term fitness success?', 8),
    (12, 'Focus on the process, not just the end goal. Consistency is key in the long run.', 12),
    (12, 'Surround yourself with positive influences, whether it’s workout partners or fitness communities.', 11),
    (12, 'Remember that setbacks are normal—don’t let one bad day stop you from achieving your goals.', 1),
    (12, 'Visualizing your success can help you stay positive and motivated to push through challenges.', 2);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (13, 'What is the best variation to do deadlift?', 2),
    (13, 'Focus on form to avoid injury.', 3),
    (13, 'Try sumo deadlifts for less strain on the lower back.', 4),
    (13, 'Romanian deadlifts are great for hamstrings.', 5);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (14, 'What are your best tips for improving squat form?', 3),
    (14, 'Make sure to keep your knees aligned with your toes.', 6),
    (14, 'Use a box to improve depth control.', 7),
    (14, 'Incorporate pause squats to build strength at the bottom.', 8),
    (14, 'Wear proper footwear for better stability.', 9),
    (14, 'Don’t forget to engage your core.', 10);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (15, 'What should I eat before a workout to optimize performance?', 4),
    (15, 'Eat a small meal rich in carbs and protein 2 hours before.', 11),
    (15, 'Hydrate properly to avoid cramps.', 12),
    (15, 'Avoid heavy fats pre-workout.', 2),
    (15, 'A banana and some peanut butter work well.', 3),
    (15, 'Caffeine can boost performance but don’t overdo it.', 4);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (16, 'Why is protein so important for muscle growth?', 5),
    (16, 'Protein is essential for muscle recovery.', 6),
    (16, 'Whey protein is quickly absorbed post-workout.', 7),
    (16, 'Don’t neglect plant-based protein sources.', 8),
    (16, 'Aim for 1.6–2.2g of protein per kg of body weight.', 9),
    (16, 'Spread your intake evenly throughout the day.', 9);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (17, 'Which is better for fat loss, HIIT or running?', 6),
    (17, 'HIIT saves time and burns a lot of calories.', 10),
    (17, 'Running builds endurance over long periods.', 11),
    (17, 'Both have their place depending on goals.', 12),
    (17, 'Combine the two for best results.', 2);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (18, 'What type of cardio is best for improving endurance?', 7),
    (18, 'Start with 20-minute sessions and gradually increase.', 3),
    (18, 'Incorporate intervals for better endurance gains.', 4),
    (18, 'Swimming is an excellent low-impact option.', 5),
    (18, 'Track your heart rate to stay in the endurance zone.', 6),
    (18, 'Don’t skip rest days to avoid burnout.', 7);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (19, 'What are the best stretches to improve flexibility?', 8),
    (19, 'Stretching helps reduce muscle tightness.', 9),
    (19, 'Hold each stretch for at least 30 seconds.', 10),
    (19, 'Dynamic stretches are great before workouts.', 11),
    (19, 'Focus on problem areas like hamstrings and shoulders.', 12);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (20, 'Which mobility exercises should I do to improve performance?', 9),
    (20, 'Include foam rolling to improve mobility.', 12),
    (20, 'Practice deep squats daily.', 2),
    (20, 'Use resistance bands to enhance range of motion.', 3),
    (20, 'Stretch your hip flexors regularly.', 4),
    (20, 'Ankle mobility drills can improve your lifts.', 5);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (21, 'What are the basic moves to learn in Brazilian Jiu-Jitsu?', 10),
    (21, 'Focus on mastering basic positions like guard and mount.', 6),
    (21, 'Learn proper breathing techniques.', 7),
    (21, 'Drill sweeps and escapes regularly.', 8);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (22, 'What are the best self-defense arts?', 11),
    (22, 'Muay Thai is effective for striking and clinching.', 9),
    (22, 'Judo helps with takedowns and throws.', 10),
    (22, 'Krav Maga teaches real-world self-defense.', 12),
    (22, 'Situational awareness is key.', 2);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (23, 'How do you stay motivated when working out?', 2),
    (23, 'Set specific and achievable goals.', 3),
    (23, 'Reward yourself for hitting milestones.', 4),
    (23, 'Keep a journal to track your progress.', 5),
    (23, 'Find a workout buddy to stay accountable.', 6),
    (23, 'Listen to motivational podcasts.', 7);

INSERT INTO posts (topic_id, content, created_by)
VALUES
    (24, 'How do you overcome a plateau in your training?', 3),
    (24, 'Change up your workout routine to shock your muscles.', 7),
    (24, 'Make sure you are getting enough rest and recovery time.', 8),
    (24, 'Increase your caloric intake slightly to fuel muscle growth.', 9),
    (24, 'Try incorporating progressive overload techniques.', 10);


CREATE VIEW user_topics AS
SELECT u.id AS user_id, u.email, u.name, u.surname, u.nickname, t.id AS topic_id, t.title AS topic_title, t.created_at AS topic_created_at
FROM users u
JOIN topics t ON u.id = t.created_by;

CREATE VIEW topic_posts AS
SELECT p.id AS post_id, p.content, p.created_at AS post_created_at, t.title AS topic_title, u.id AS user_id, u.name, u.surname, u.nickname
FROM posts p
JOIN topics t ON p.topic_id = t.id
JOIN users u ON p.created_by = u.id;


CREATE OR REPLACE FUNCTION get_topic_posts(topic_id INT)
RETURNS TABLE (post_id INT, post_content TEXT, created_at TIMESTAMP, user_name VARCHAR, user_surname VARCHAR) AS
$$
BEGIN
RETURN QUERY
SELECT p.id, p.content, p.created_at, u.name, u.surname
FROM posts p
         JOIN users u ON p.created_by = u.id
WHERE p.topic_id = topic_id;
END;
$$ LANGUAGE plpgsql;