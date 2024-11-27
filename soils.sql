-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 10:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soils`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbots`
--

CREATE TABLE `chatbots` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbots`
--

INSERT INTO `chatbots` (`id`, `question`, `answer`, `user_id`, `status`) VALUES
(1, 'eggplants weather', 'Eggplants thrive in warm, sunny climates with temperatures between 70-85Â°F (21-29Â°C). They need full sun for optimal growth.', 4, 1),
(2, 'palm trees weather', 'Ideal conditions for palm trees include warm temperatures, full sun exposure, and well-drained soil. They need consistent warmth to thrive.', 4, 1),
(3, 'what is laterite soil', 'Laterite soil is known for its reddish color, high iron and aluminum content, and poor fertility without proper management and fertilization.', 4, 1),
(4, 'what is alluvial soil', 'Alluvial soil is a type of fertile soil deposited by rivers and is found in areas with active water flow.', 4, 1),
(5, 'content 2', 'Sorry, I don\'t have knowledge for this.', 4, 1),
(6, 'content', 'Sorry, I don\'t have knowledge for this.', 4, 1),
(7, 'content 3', 'Sorry, I don\'t have knowledge for this.', 4, 1),
(8, 'review', 'Sorry, I don\'t have knowledge for this.', 4, 1),
(9, 'Hi', 'Good evening!', 2, 1),
(10, 'hello', 'Good morning!', 2, 1),
(11, 'Hi', 'Hey! Great to see you here!,MUNBIT CHATBOT with you What can I assist you with?', 2, 1),
(12, 'what is soil', 'Soil is a natural mixture of minerals, organic matter, gases, and water that supports plant life.', 2, 1),
(13, 'im in jeddah what is the best plant here?', 'Jeddahâ€™s indoor gardeners often grow cherry tomatoes, basil, and snake plants, which handle the warm, humid air well.', 2, 1),
(14, 'what is the problem if i select wrong soil type?', 'If the soil drains poorly or lacks nutrients, plants may struggle to grow and suffer from diseases.', 2, 1),
(15, 'tell me about sandy soil?', 'This type of soil has high drainage but low water and nutrient retention, making it best for plants adapted to dry conditions.', 2, 1),
(16, 'tell me about silt soil?', 'This type of soil is fertile and fine-textured, which supports plant growth, though it may need organic matter to improve drainage.', 2, 1),
(17, 'what is the best plant in riyadh', 'For indoor spaces in Jeddah, plants like basil, ZZ plants, and spider plants are favorites as they tolerate the humid environment and require indirect light.', 2, 1),
(18, 'Best indoor plants for Riyadh?', 'In Jeddah, popular indoor plants include the peace lily, mint, and cherry tomato plants, which can thrive indoors with moderate care and humidity.', 2, 1),
(19, 'how we use drones in planting?', 'Drones are used for aerial surveillance, enabling farmers to monitor crop growth, identify diseases, and assess soil health with high precision.', 2, 1),
(20, 'what i can plant in winter?', 'Cold-weather flowers like hellebores, snowdrops, and cyclamen can bloom even in the midst of winter, brightening up your garden.', 2, 1),
(21, ';l;', 'It was great talking with you. See you next time!', 2, 1),
(22, 'lknjlk', 'It was great talking with you. See you next time!', 2, 1),
(23, 'tell me about palm tree', 'Palm trees are susceptible to pests like aphids, mealybugs, scale insects, and the red palm weevil. Keeping an eye out for these pests and treating them promptly is essential.', 2, 1),
(24, 'qqq', 'Goodbye! Have a wonderful day!', 2, 1),
(25, 'i want to plant in my home what i can plant', 'Regular monitoring and early detection of pests can help in timely intervention. Remove any infested plant parts and maintain overall plant health.', 2, 1),
(26, 'what is the best plant in home', 'Crops that grow well in sandy soil include root vegetables like carrots and potatoes, as well as melons and peanuts.', 2, 1),
(27, 'best indoor plants', 'Sorry, I don\'t have knowledge for this.', 2, 1),
(28, 'C:Userssmr-aOneDriveالصورسطح ا', 'Thanks for chatting! Take care!', 2, 1),
(29, 'rkgr', 'Goodbye! Have a wonderful day!', 2, 1),
(30, 'lknjlk', 'Thanks for chatting! Take care!', 2, 1),
(31, 'best indoor plants', 'For indoor spaces in Jeddah, plants like basil, ZZ plants, and spider plants are favorites as they tolerate the humid environment and require indirect light.', 2, 1),
(32, 'best plants in home', 'Sorry, I don\'t have knowledge for this.', 2, 1),
(33, 'best house plants', 'Plants that lack water often show signs of stress such as wilting, yellowing, and crispy leaf edges, which signal dehydration.', 2, 1),
(34, 'good bye', 'Goodbye! Let me know if you ever need more help.', 2, 1),
(35, 'what is soil', 'Soil is a natural mixture of minerals, organic matter, gases, and water that supports plant life.', 2, 1),
(36, 'Hi', 'Good evening! MUNBIT CHATBOT with you how can i help you?', 2, 1),
(37, 'tell me about plant in albaha', 'Sorry, I don\'t have knowledge for this.', 2, 1),
(38, 'hi', 'Hi there MUNBIT CHATBOT with you! What can I assist you with?', 2, 1),
(39, 'hi', 'Hello! MUNBIT CHATBOT with you How can I help you today?', 5, 1),
(40, 'Good bye', 'Thanks for chatting! Take care!', 5, 1),
(41, 'what is soil', 'Soil is a natural mixture of minerals, organic matter, gases, and water that supports plant life.', 5, 1),
(42, 'Hi', 'Hi there BIT with you! What can I assist you with?', 6, 1),
(43, 'How does soil type affect water retention?', 'Soil texture is critical because it affects how water moves through the soil. Fine-textured soils like clay retain water better, while coarse-textured soils like sand need more water to stay moist.', 6, 1),
(44, 'How is AI used in agriculture?', 'AI is used in agriculture for tasks like crop monitoring, disease detection, and predictive analytics, helping farmers make smarter, data-driven decisions.', 6, 1),
(45, 'Thank you', 'Goodbye! Have a wonderful day!', 6, 1),
(46, 'hi', 'Hi there BIT with you! What can I assist you with?', 5, 1),
(47, 'kjoijoijp', 'Goodbye! Have a wonderful day!', 5, 1),
(48, 'bye', 'Goodbye! Let me know if you ever need more help.', 5, 1),
(49, 'o', 'I\'m here to help , but I might not have info on that. Try asking something else!', 5, 1),
(50, '[', 'Hmm, I\'m not sure about that. Could you rephrase or ask something different?', 5, 1),
(51, 'fe', 'Hmm, I\'m not sure about that. Could you rephrase or ask something different?', 5, 1),
(52, 'lkpok', 'Sorry, I don\'t have info on that, but I\'m here to answer other questions!', 5, 1),
(53, ';ls', 'I\'m not certain about that topic, but feel free to ask me something else!', 5, 1),
(54, ';;', 'I\'m here to help , but I might not have info on that. Try asking something else!', 5, 1),
(55, 'llllll', 'I\'m not certain about that topic, but feel free to ask me something else!', 5, 1),
(56, 'hi', 'Hey! Great to see you here!,MUNBIT CHATBOT with you What can I assist you with?', 5, 1),
(57, 'good bye', 'It was great talking with you. See you next time!', 2, 1),
(58, 'Hi', 'Hello! MUNBIT CHATBOT with you How can I help you today?', 5, 1),
(59, 'Good morning', 'Good morning! Hope you\'re having a wonderful day , How can i help you?', 5, 1),
(60, 'What crops grow in alluvial soil?', 'Alluvial soil is ideal for growing rice, wheat, sugarcane, and various vegetables due to its high fertility and good drainage.', 5, 1),
(61, 'Problems of  wrong soil type', 'Incorrect soil can cause problems like poor drainage, root rot, and lack of essential nutrients for plants.', 5, 1),
(62, 'Importance of selecting right soil for plants', 'The correct soil type helps maintain moisture balance and nutrient levels, which are essential for plant growth.', 5, 1),
(63, 'Does soil type affect plant drainage?', 'Poorly drained soil may result in waterlogged roots, depriving them of oxygen and weakening the plant.', 5, 1),
(64, 'How does the right soil type support root growth?', 'Using the correct soil type allows roots to grow freely, absorbing nutrients and water efficiently.', 5, 1),
(65, 'Why is pH balance important in soil?', 'The right pH in soil is essential for nutrient absorption, as it affects how plants take up minerals.', 5, 1),
(66, 'What are the best flowers for home', 'African violets are great indoor flowers as they bloom year-round and thrive in low-light conditions.', 5, 1),
(67, 'What are good indoor fruit plants?', 'Dwarf fig trees are compact and can yield fruit even in limited space, making them great for homes.', 5, 1),
(68, 'Which herbs can I grow inside?', 'Parsley grows well in small pots indoors and is versatile in many recipes.', 5, 1),
(69, 'Best air-purifying indoor plants?', 'English ivy is a popular air-purifying plant that grows well indoors with proper care.', 5, 1),
(70, 'What crops grow well in laterite soil?', 'Crops that grow well in laterite soil include tea, coffee, cashew, and rubber due to its well-draining properties.', 5, 1),
(71, 'What can I plant in sandy soil?', 'Sandy soil is perfect for cultivating crops like cucumbers, sweet potatoes, and peanuts. It provides the drainage necessary for healthy root development.', 5, 1),
(72, 'What can I plant in clay soil?', 'Alluvial soil is ideal for growing rice, wheat, sugarcane, and various vegetables due to its high fertility and good drainage.', 5, 1),
(73, 'Which crops are best for clay soil?', 'You can plant rice, wheat, maize, and pulses in alluvial soil. Its fertility makes it suitable for a wide range of crops.', 5, 1),
(74, 'What can I plant in loamy soil?', 'You can plant rice, wheat, maize, and pulses in alluvial soil. Its fertility makes it suitable for a wide range of crops.', 5, 1),
(75, 'What can I plant in loamy soil?', 'Alluvial soil is perfect for cultivating crops like rice, wheat, sugarcane, and cotton. It provides the nutrients necessary for healthy plant growth.', 5, 1),
(76, 'What can I plant in loamy soil?', 'Alluvial soil is perfect for cultivating crops like rice, wheat, sugarcane, and cotton. It provides the nutrients necessary for healthy plant growth.', 2, 1),
(77, 'Best crops for loamy soil?', 'Crops that grow well in laterite soil include tea, coffee, cashew, and rubber due to its well-draining properties.', 2, 1),
(78, 'Best crops for loamy soil', 'Crops that grow well in laterite soil include tea, coffee, cashew, and rubber due to its well-draining properties.', 2, 1),
(79, 'How does agriculture benefit the environment?', 'By promoting green technologies and reducing harmful chemical inputs, agriculture helps mitigate environmental degradation while supporting sustainable land use.', 2, 1),
(80, '\"How does planting help reduce stress?', 'Agriculture provides fresh, nutritious food essential for our health, improving immunity and reducing the risk of chronic diseases like obesity and heart disease.', 2, 1),
(81, 'How does agriculture benefit mental health?', 'Agriculture provides fresh, nutritious food essential for our health, improving immunity and reducing the risk of chronic diseases like obesity and heart disease.', 2, 1),
(82, 'hello', 'Hello! MUNBIT CHATBOT with you How can I help you today?', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `details` text DEFAULT NULL,
  `result` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `status`, `details`, `result`, `user_id`) VALUES
(1, 'sad.jpg', 1, 'The image is not a soil image!', 'not soil', 2),
(2, 'laterite4.jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(4, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(5, 'LOAMY1.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(6, 'clay.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(7, 'alluvial1.png', 1, 'Alluvial soil, formed by the deposition of sediments by rivers, is commonly found in river valleys and deltas. This soil is typically loamy, consisting of sand, silt, and clay, making it exceptionally fertile. It often appears in shades of brown, gray, or reddish hues. Rich in essential minerals like potassium and magnesium, alluvial soil supports robust plant growth. Its ability to retain moisture and its balanced texture make it ideal for agriculture, particularly for crops such as rice, wheat, sugarcane, and vegetables. The formation of alluvial soil is a gradual process, taking thousands of years as rivers erode rocks and soil, carrying these particles downstream to create new layers of soil upon settling. Prominent regions with alluvial soil include the Nile Delta in Egypt, the Ganges-Brahmaputra Delta in India and Bangladesh, and the Mississippi River Delta in the United States. This soil\'s fertility and ease of cultivation make it a cornerstone for agricultural productivity in these areas', 'Alluvial', 4),
(8, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 4),
(9, 'CY-lab3-6.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(10, 'CY-lab3-6.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(11, '4.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(12, 'sad.jpg', 1, 'The image is not a soil image!', 'not soil', 2),
(13, 'Clay_1.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(14, '4.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(15, '4.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(16, 'a3.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(17, 'a3.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(18, 'a3.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(19, 'R (1).jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(20, 'R (1).jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(21, 'plantsforclay-header-1536x1020.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(22, 'OIP.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(23, 'clay 32.jpg', 1, 'The image is not a soil image!', 'not soil', 2),
(24, 'clay 35.jpg', 1, 'The image is not a soil image!', 'not soil', 2),
(25, 'LOAMY1.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(26, 'clay 34.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(27, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(28, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(29, 'loamy 1.png410.jpg2465.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(30, 'alluvial 1.png', 1, 'Alluvial soil, formed by the deposition of sediments by rivers, is commonly found in river valleys and deltas. This soil is typically loamy, consisting of sand, silt, and clay, making it exceptionally fertile. It often appears in shades of brown, gray, or reddish hues. Rich in essential minerals like potassium and magnesium, alluvial soil supports robust plant growth. Its ability to retain moisture and its balanced texture make it ideal for agriculture, particularly for crops such as rice, wheat, sugarcane, and vegetables. The formation of alluvial soil is a gradual process, taking thousands of years as rivers erode rocks and soil, carrying these particles downstream to create new layers of soil upon settling. Prominent regions with alluvial soil include the Nile Delta in Egypt, the Ganges-Brahmaputra Delta in India and Bangladesh, and the Mississippi River Delta in the United States. This soil\'s fertility and ease of cultivation make it a cornerstone for agricultural productivity in these areas', 'Alluvial', 5),
(31, 'alluvial 1.png', 1, 'Alluvial soil, formed by the deposition of sediments by rivers, is commonly found in river valleys and deltas. This soil is typically loamy, consisting of sand, silt, and clay, making it exceptionally fertile. It often appears in shades of brown, gray, or reddish hues. Rich in essential minerals like potassium and magnesium, alluvial soil supports robust plant growth. Its ability to retain moisture and its balanced texture make it ideal for agriculture, particularly for crops such as rice, wheat, sugarcane, and vegetables. The formation of alluvial soil is a gradual process, taking thousands of years as rivers erode rocks and soil, carrying these particles downstream to create new layers of soil upon settling. Prominent regions with alluvial soil include the Nile Delta in Egypt, the Ganges-Brahmaputra Delta in India and Bangladesh, and the Mississippi River Delta in the United States. This soil\'s fertility and ease of cultivation make it a cornerstone for agricultural productivity in these areas', 'Alluvial', 5),
(32, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(33, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(36, '5b43e36ff66f7a5d504d26f8e9b4616d.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(37, 'HD wallpaper_ minimalism 4k  for mac desktop.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(38, '3c6e499eedf2eee062a3f0cc095e11a7.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(39, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(40, 'alluvial 1.png', 1, 'Alluvial soil, formed by the deposition of sediments by rivers, is commonly found in river valleys and deltas. This soil is typically loamy, consisting of sand, silt, and clay, making it exceptionally fertile. It often appears in shades of brown, gray, or reddish hues. Rich in essential minerals like potassium and magnesium, alluvial soil supports robust plant growth. Its ability to retain moisture and its balanced texture make it ideal for agriculture, particularly for crops such as rice, wheat, sugarcane, and vegetables. The formation of alluvial soil is a gradual process, taking thousands of years as rivers erode rocks and soil, carrying these particles downstream to create new layers of soil upon settling. Prominent regions with alluvial soil include the Nile Delta in Egypt, the Ganges-Brahmaputra Delta in India and Bangladesh, and the Mississippi River Delta in the United States. This soil\'s fertility and ease of cultivation make it a cornerstone for agricultural productivity in these areas', 'Alluvial', 5),
(41, 'laterite 1.png', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 5),
(42, 'sandy 1.png', 1, 'The image is not a soil image!', 'not soil', 5),
(43, 'sandy 2.png586.jpg3522.jpg', 1, 'The image is not a soil image!', 'not soil', 5),
(44, 'aboutMunbit.png', 1, 'The image is not a soil image!', 'not soil', 5),
(45, 'sandy 1.png', 1, 'The image is not a soil image!', 'not soil', 5),
(46, 'sandy 3.png329.png', 1, 'The image is not a soil image!', 'not soil', 5),
(47, 'Deemaphoto.jpeg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(48, 'figma.png', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(49, 'java.png', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(50, '1b8d4e317d51fc2809c87cb3c044581a.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(51, 'sandy 1.png261.png', 1, 'The image is not a soil image!', 'not soil', 5),
(52, '1b8d4e317d51fc2809c87cb3c044581a.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(53, '1b8d4e317d51fc2809c87cb3c044581a.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(54, '2576b0b49257e74f47a48bcd622f60c0.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(55, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 5),
(56, 'sandy 2.png294.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 5),
(57, 'autumn.png', 1, 'The image is not a soil image!', 'not soil', 5),
(58, '1b8d4e317d51fc2809c87cb3c044581a.jpg', 1, 'The image is not a soil image!', 'not soil', 5),
(59, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 5),
(60, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5);
INSERT INTO `images` (`id`, `path`, `status`, `details`, `result`, `user_id`) VALUES
(61, 'loamy 1.png207.png831.png', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(62, 'laterite 1.png120.png483.png', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 5),
(63, 'alluvial 1.png0.jpg5.jpg', 1, 'The image is not a soil image!', 'not soil', 5),
(64, 'alluvial 1.png1.jpg11.jpg', 1, 'The image is not a soil image!', 'not soil', 5),
(65, 'alluvial 3.png13.png56.png', 1, 'The image is not a soil image!', 'not soil', 5),
(66, 'alluvial 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 5),
(67, 'clay 1.png', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 5),
(68, 'laterite 1.png', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 5),
(69, 'loamy 1.png207.png', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 5),
(70, '1b8d4e317d51fc2809c87cb3c044581a.jpg', 1, 'The image is not a soil image!', 'not soil', 5),
(71, 'sandy 1.png261.png1035.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 5),
(72, 'nabataty-logoo.png', 1, 'The image is not a soil image!', 'not soil', 2),
(73, 'alluvial1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(74, 'LOAMY1.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(75, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(76, 'laterite4.jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(77, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(78, 'alluvial 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(79, 'sandy 3.png329.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(80, 'sandy 3.png329.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(81, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(82, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(83, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(84, 'sandy 3.png329.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(85, 'sandy 3.png329.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(86, 'alluvial 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(87, 'sandy 2.png294.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(88, 'sandy 2.png294.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(89, 'sandy 1.png261.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(90, 'alluvial1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(91, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(92, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(93, 'sandy 1.png', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(94, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(95, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(96, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(97, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(98, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(99, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(100, 'sandy.jpg', 1, 'Sandy soil is characterized by its gritty texture due to the predominance of sand particles. Its color typically ranges from light brown to yellowish. One of its defining features is excellent drainage, which allows water to pass through quickly, making it less likely to become waterlogged. However, this also means that sandy soil tends to dry out faster and doesn\'t retain nutrients as well as other soil types. Consequently, plants in sandy soil often require more frequent watering and fertilization. Despite these challenges, sandy soil warms up quickly in the spring, promoting early plant growth. It\'s ideal for certain plants that prefer well-drained conditions, such as root vegetables like carrots and radishes, and some fruits like melons. Sandy soil is commonly found in coastal areas and deserts, such as parts of Egypt\'s deserts, the Arabian Peninsula, and Australia\'s coastal regions. Its unique properties make it both a challenge and a blessing for gardeners and farmers, offering specific benefits while requiring careful management to maintain soil health and productivity.', 'Sandy', 2),
(101, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(102, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(103, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(104, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(105, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(106, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(107, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(108, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(109, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(110, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(111, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2);
INSERT INTO `images` (`id`, `path`, `status`, `details`, `result`, `user_id`) VALUES
(112, 'LOAMY.jpg', 1, 'Loamy soil is often considered the ideal soil for agriculture due to its balanced mixture of sand, silt, and clay. This soil type combines the benefits of each component, providing excellent drainage while retaining enough moisture and nutrients to support healthy plant growth. Its texture is soft and crumbly, making it easy to work with and highly suitable for a wide range of crops, including vegetables, fruits, and grains. Loamy soil is typically dark in color, rich in organic matter, and teeming with beneficial microorganisms that enhance soil fertility. Found in various regions around the world, loamy soil supports productive farming practices and is a favorite among gardeners and farmers alike. Its versatility and fertility make it an invaluable resource for sustaining agricultural productivity and ensuring successful harvests.', 'Loamy', 2),
(113, 'laterite1.jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(114, 'laterite1.jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(115, 'laterite1.jpg', 1, 'Laterite soil, commonly found in tropical and subtropical regions, is rich in iron and aluminum due to intense weathering and leaching processes. This type of soil is typically red or reddish-brown, indicating high iron content, and is often hard and compact. Its formation involves the removal of silica from the soil, leaving behind the oxides of iron and aluminum. While laterite soil is often low in fertility due to the leaching of nutrients, it can support crops such as coffee, tea, and cashew with proper management and fertilization. One of the notable features of laterite soil is its ability to harden irreversibly upon exposure to air, making it useful for construction purposes in regions where it is prevalent. However, the same property poses challenges for agriculture, requiring specific techniques to improve its structure and nutrient content. Laterite soil is predominantly found in countries like India, Sri Lanka, and parts of Africa and South America, where tropical climates facilitate its formation. Despite its challenges, laterite soil remains a crucial resource for both agriculture and construction in these regions.', 'Laterite', 2),
(116, 'clay.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(117, 'clay.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(118, 'clay.jpg', 1, 'Clay soil is known for its fine, compact particles, which create a dense and heavy texture. Typically rich in nutrients, clay soil holds water exceptionally well, often leading to waterlogging. This soil type is slow to warm in the spring and can become hard and cracked in dry conditions, making it challenging for roots to penetrate. Despite these difficulties, clay soil is highly fertile and, when managed correctly, can support robust plant growth. Its color can range from red to brown, depending on the mineral content. Due to its density, it requires thorough tilling and the incorporation of organic matter to improve its structure and drainage. Gardeners and farmers who understand how to work with clay soil can reap the benefits of its nutrient-rich properties, making it a valuable resource in agriculture. Prominent regions with clay soil include parts of the Midwest in the United States and regions in Australia and Africa. Though demanding in terms of management, clay soilâ€™s fertility and nutrient-holding capacity make it an important type for agricultural productivity.', 'Clay', 2),
(119, 'clay.jpg', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(120, 'clay.jpg', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(121, 'clay.jpg', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(122, 'clay.jpg', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(123, 'sandy.jpg', 1, 'Sandy soil, characterized by its large particles and loose texture, is known for its excellent drainage and ease of cultivation. However, it has low water retention and nutrient-holding capacity, requiring careful management for successful plant growth. This soil is typically light in color, warms up quickly, and is slightly acidic to neutral in pH, making it suitable for specific crops that tolerate dry conditions. To enhance fertility, sandy soil often benefits from organic matter additions such as compost or manure to improve moisture and nutrient retention.', 'Sandy', 5),
(124, 'sandy.jpg', 1, 'Sandy soil, characterized by its large particles and loose texture, is known for its excellent drainage and ease of cultivation. However, it has low water retention and nutrient-holding capacity, requiring careful management for successful plant growth. This soil is typically light in color, warms up quickly, and is slightly acidic to neutral in pH, making it suitable for specific crops that tolerate dry conditions. To enhance fertility, sandy soil often benefits from organic matter additions such as compost or manure to improve moisture and nutrient retention.', 'Sandy', 5),
(125, 'sandy.jpg', 1, 'Sandy soil, characterized by its large particles and loose texture, is known for its excellent drainage and ease of cultivation. However, it has low water retention and nutrient-holding capacity, requiring careful management for successful plant growth. This soil is typically light in color, warms up quickly, and is slightly acidic to neutral in pH, making it suitable for specific crops that tolerate dry conditions. To enhance fertility, sandy soil often benefits from organic matter additions such as compost or manure to improve moisture and nutrient retention.', 'Sandy', 5),
(126, 'clay 1.png', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(127, 'alluvial 1.png', 1, 'Sandy soil, characterized by its large particles and loose texture, is known for its excellent drainage and ease of cultivation. However, it has low water retention and nutrient-holding capacity, requiring careful management for successful plant growth. This soil is typically light in color, warms up quickly, and is slightly acidic to neutral in pH, making it suitable for specific crops that tolerate dry conditions. To enhance fertility, sandy soil often benefits from organic matter additions such as compost or manure to improve moisture and nutrient retention.', 'Sandy', 5),
(128, 'clay 1.png', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(129, 'clay 1.png', 1, 'Clay soil, known for its fine particles and compact texture, is characterized by its ability to retain water and nutrients, making it highly fertile. However, its poor drainage and tendency to become waterlogged can pose challenges for plant growth. Clay soil is heavy and sticky when wet but cracks when dry, making it difficult to cultivate without proper amendments. It is typically rich in minerals such as calcium, magnesium, and potassium, with a slightly acidic to neutral pH, making it suitable for a wide range of crops with careful management. To improve its structure, clay soil benefits from organic matter like compost or gypsum to enhance drainage and aeration.  ', 'Clay', 5),
(130, 'laterite 1.png', 1, 'Laterite soil, formed in tropical and subtropical regions through intense weathering, is characterized by its rich iron and aluminum content, giving it a reddish color. It is typically acidic in nature, well-draining, and low in organic matter and essential nutrients, which can limit its fertility. However, with proper amendments such as the addition of organic matter and fertilizers, laterite soil can support a variety of crops. It is best suited for drought-resistant plants due to its good drainage capabilities. ', 'Laterite', 5),
(131, 'loamy 1.png', 1, 'Loamy soil, often considered the ideal soil type for agriculture, is a well-balanced mixture of sand, silt, and clay, offering the best characteristics of each. It is known for its excellent drainage, good water retention, and high nutrient content, making it highly fertile and suitable for a wide range of plants. Loamy soil has a crumbly texture that is easy to work with and is typically rich in organic matter, providing a neutral to slightly acidic pH that supports healthy plant growth. This soil type warms up quickly in the spring and retains moisture during dry periods, ensuring consistent support for crops. ', 'Loamy', 5),
(132, 'sandy 1.png261.png1035.png', 1, 'Sandy soil, characterized by its large particles and loose texture, is known for its excellent drainage and ease of cultivation. However, it has low water retention and nutrient-holding capacity, requiring careful management for successful plant growth. This soil is typically light in color, warms up quickly, and is slightly acidic to neutral in pH, making it suitable for specific crops that tolerate dry conditions. To enhance fertility, sandy soil often benefits from organic matter additions such as compost or manure to improve moisture and nutrient retention.', 'Sandy', 5);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `type`, `image`) VALUES
(1, 'sugarcane', 'trees', 'sugarcane.png'),
(2, 'cotton', 'flowers', 'cotton.png'),
(3, 'coffe', 'trees', 'coffee.png'),
(4, 'Rubber', 'trees', 'Rubber_Tree.png'),
(5, 'Carrots', 'fruits', 'carrot.png'),
(6, 'water melons', 'fruits', 'watermelon.png'),
(7, 'Apples', 'trees', 'apples.png'),
(8, 'Black Eyed Susan', 'flowers', 'black_eyed_susan.png'),
(10, 'Dog Tooth Violet', 'flowers', 'dog_tooth_violet.png'),
(11, 'Sugarcane\r\n', 'fruits\r\n', 'sugarcane.png'),
(12, 'Radishes', 'fruits', 'radishes.png'),
(13, 'Peppers', 'fruits', 'peppers.png'),
(14, 'Chives', 'fruits', 'chives.png'),
(15, 'Lettuce', 'fruits', 'lettuce.png'),
(16, 'Grapes', 'fruits', 'grapes.png'),
(17, 'Figs', 'fruits', 'figs.png'),
(18, 'Peaches', 'fruits', 'peaches.png'),
(19, 'Lavender', 'flowers', 'Lavender.png'),
(20, 'marigolds', 'flowers', 'marigolds.png'),
(21, 'Hyacinths', 'flowers', 'hyacinths.png'),
(22, 'Tulips', 'flowers', 'tulips.png'),
(23, 'Pine', 'trees', 'Pine.png'),
(24, 'Cedar', 'trees', 'cedar.png'),
(25, 'Tomatoes', 'fruits', 'Tomatoes.png'),
(26, 'Cucumbers', 'fruits', 'Cucumbers.png'),
(27, 'kale', 'fruits', 'kale.png'),
(28, 'Strawberries', 'fruits', 'strawberries.png'),
(29, 'Raspberries', 'fruits', 'raspberries.png'),
(30, 'Roses', 'flowers', 'Roses.png'),
(31, 'Sunflowers', 'flowers', 'sunflowers.png'),
(32, 'Zinnias', 'flowers', 'zinnias.png'),
(33, 'Daffodils', 'flowers', 'daffodils.png'),
(34, 'oak', 'trees', 'oak.png'),
(35, 'Cherry', 'trees', 'cherry.png'),
(36, 'Sweetpotatoes', 'fruits', 'Sweetpotatoes.png'),
(37, 'Cassava', 'fruits', 'cassava.png'),
(38, 'Taro', 'fruits', 'taro.png'),
(39, 'Pineapples', 'fruits', 'Pineapples.png'),
(40, 'Cashews', 'fruits', 'cashews.png'),
(41, 'Coconuts', 'fruits', 'coconuts.png'),
(42, 'Bougainvillea', 'flowers', 'Bougainvillea.png'),
(43, 'Hibiscus', 'flowers', 'hibiscus.png'),
(44, 'Ixora', 'flowers', 'ixora.png'),
(45, 'coffeeTree', 'trees', 'coffeeTree.png'),
(46, 'Eucalyptus', 'trees', 'eucalyptus.png'),
(47, 'Broccoli', 'fruits', 'Broccoli.png'),
(48, 'Brussels sprout', 'fruits', 'Brussels sprout.png'),
(49, 'Cabbage', 'fruits', 'cabbage.png'),
(50, 'Plums', 'fruits', 'Plums.png'),
(51, 'Pears', 'fruits', 'pears.png'),
(52, 'Asters', 'flowers', 'Asters.png'),
(53, 'Daylilies', 'flowers', 'daylilies.png'),
(54, 'Irises', 'flowers', 'irises.png'),
(55, 'Hydrangea', 'flowers', 'Hydrangea.png'),
(56, 'Hellebores', 'flowers', 'hellebores.png'),
(57, 'Willow', 'trees', 'Willow.png'),
(58, 'Rice', 'fruits', 'Ricee.png'),
(59, 'Corn', 'fruits', 'corn.png'),
(60, 'Wheat', 'fruits', 'wheat.png'),
(61, 'Banana', 'fruits', 'banana.png'),
(62, 'Mango', 'fruits', 'mango.png'),
(63, 'Lotus', 'flowers', 'Lotus.png'),
(64, 'Lily', 'flowers', 'Lily.png'),
(66, 'Zucchini', 'fruits', 'Squash.png'),
(67, 'Cosmos', 'flowers', 'Cosmos.png'),
(68, 'Banyan', 'trees', 'Banyan.png'),
(69, 'Bamboo', 'trees', 'Bamboo.png'),
(70, 'Elm', 'trees', 'elm.png');

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `plant_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`plant_id`, `image_id`) VALUES
(1, 30),
(1, 31),
(1, 40),
(2, 30),
(2, 31),
(2, 40),
(3, 2),
(3, 19),
(3, 20),
(3, 41),
(3, 62),
(3, 68),
(3, 76),
(3, 113),
(3, 114),
(3, 115),
(4, 2),
(4, 19),
(4, 20),
(4, 41),
(4, 62),
(4, 68),
(4, 76),
(4, 113),
(4, 114),
(4, 115),
(4, 130),
(5, 9),
(5, 10),
(5, 11),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 55),
(5, 56),
(5, 59),
(5, 66),
(5, 71),
(5, 73),
(5, 75),
(5, 77),
(5, 78),
(5, 79),
(5, 80),
(5, 81),
(5, 82),
(5, 83),
(5, 84),
(5, 85),
(5, 86),
(5, 87),
(5, 88),
(5, 89),
(5, 90),
(5, 91),
(5, 92),
(5, 93),
(5, 94),
(5, 95),
(5, 96),
(5, 97),
(5, 98),
(5, 99),
(5, 100),
(5, 123),
(5, 124),
(5, 125),
(5, 127),
(5, 132),
(6, 9),
(6, 10),
(6, 11),
(6, 14),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(6, 55),
(6, 56),
(6, 59),
(6, 66),
(6, 71),
(6, 73),
(6, 75),
(6, 77),
(6, 78),
(6, 79),
(6, 80),
(6, 81),
(6, 82),
(6, 84),
(6, 86),
(6, 88),
(6, 89),
(6, 90),
(6, 91),
(6, 92),
(6, 93),
(6, 94),
(6, 95),
(6, 96),
(6, 97),
(6, 98),
(6, 99),
(6, 100),
(6, 123),
(6, 124),
(6, 125),
(6, 127),
(6, 132),
(7, 13),
(7, 21),
(7, 22),
(7, 26),
(7, 27),
(7, 28),
(7, 32),
(7, 33),
(7, 38),
(7, 39),
(7, 47),
(7, 50),
(7, 52),
(7, 53),
(7, 54),
(7, 60),
(7, 67),
(7, 108),
(7, 109),
(7, 110),
(7, 111),
(7, 112),
(7, 116),
(7, 117),
(7, 118),
(7, 119),
(7, 120),
(7, 121),
(7, 122),
(7, 126),
(7, 128),
(7, 129),
(7, 131),
(8, 13),
(8, 21),
(8, 22),
(8, 26),
(8, 27),
(8, 28),
(8, 32),
(8, 33),
(8, 38),
(8, 39),
(8, 47),
(8, 50),
(8, 52),
(8, 53),
(8, 54),
(8, 60),
(8, 67),
(8, 116),
(8, 117),
(8, 118),
(10, 5),
(10, 25),
(10, 29),
(10, 36),
(10, 37),
(10, 48),
(10, 49),
(10, 61),
(10, 69),
(10, 74),
(10, 101),
(10, 102),
(10, 103),
(10, 104),
(10, 105),
(10, 106),
(10, 107),
(10, 108),
(10, 109),
(10, 110),
(10, 111),
(10, 112),
(12, 83),
(12, 85),
(12, 87),
(12, 89),
(12, 90),
(12, 91),
(12, 92),
(12, 93),
(12, 94),
(12, 95),
(12, 96),
(12, 97),
(12, 98),
(12, 99),
(12, 100),
(12, 119),
(12, 120),
(12, 121),
(12, 122),
(12, 123),
(12, 124),
(12, 125),
(12, 126),
(12, 127),
(12, 128),
(12, 129),
(12, 132),
(13, 92),
(13, 93),
(13, 94),
(13, 95),
(13, 96),
(13, 97),
(13, 98),
(13, 99),
(13, 100),
(13, 123),
(13, 124),
(13, 125),
(13, 127),
(13, 132),
(14, 93),
(14, 94),
(14, 95),
(14, 96),
(14, 97),
(14, 98),
(14, 99),
(14, 100),
(14, 123),
(14, 124),
(14, 125),
(14, 127),
(14, 132),
(15, 94),
(15, 95),
(15, 96),
(15, 97),
(15, 98),
(15, 99),
(15, 100),
(15, 106),
(15, 107),
(15, 108),
(15, 109),
(15, 110),
(15, 111),
(15, 112),
(15, 123),
(15, 124),
(15, 125),
(15, 127),
(15, 131),
(15, 132),
(16, 95),
(16, 96),
(16, 97),
(16, 98),
(16, 99),
(16, 100),
(16, 123),
(16, 124),
(16, 125),
(16, 127),
(16, 132),
(17, 95),
(17, 96),
(17, 97),
(17, 98),
(17, 99),
(17, 100),
(17, 123),
(17, 124),
(17, 125),
(17, 127),
(17, 132),
(18, 96),
(18, 97),
(18, 98),
(18, 99),
(18, 100),
(18, 123),
(18, 124),
(18, 125),
(18, 127),
(18, 132),
(19, 97),
(19, 98),
(19, 99),
(19, 100),
(19, 123),
(19, 124),
(19, 125),
(19, 132),
(20, 99),
(20, 100),
(20, 123),
(20, 124),
(20, 125),
(20, 130),
(20, 132),
(21, 99),
(21, 100),
(21, 123),
(21, 124),
(21, 125),
(21, 132),
(22, 99),
(22, 100),
(22, 110),
(22, 111),
(22, 112),
(22, 123),
(22, 124),
(22, 125),
(22, 131),
(22, 132),
(23, 100),
(23, 123),
(23, 124),
(23, 125),
(23, 132),
(24, 100),
(24, 123),
(24, 124),
(24, 125),
(24, 132),
(25, 101),
(25, 102),
(25, 103),
(25, 104),
(25, 105),
(25, 106),
(25, 107),
(25, 108),
(25, 109),
(25, 110),
(25, 111),
(25, 112),
(25, 131),
(26, 105),
(26, 106),
(26, 107),
(26, 108),
(26, 109),
(26, 110),
(26, 111),
(26, 112),
(26, 131),
(27, 107),
(27, 108),
(27, 109),
(27, 110),
(27, 111),
(27, 112),
(27, 117),
(27, 118),
(27, 119),
(27, 120),
(27, 121),
(27, 122),
(27, 126),
(27, 128),
(27, 129),
(27, 131),
(28, 109),
(28, 110),
(28, 111),
(28, 112),
(28, 131),
(29, 109),
(29, 110),
(29, 111),
(29, 112),
(29, 131),
(30, 110),
(30, 111),
(30, 112),
(30, 131),
(31, 110),
(31, 111),
(31, 112),
(31, 131),
(32, 110),
(32, 111),
(32, 112),
(32, 131),
(33, 110),
(33, 111),
(33, 112),
(33, 131),
(34, 112),
(34, 131),
(35, 112),
(35, 131),
(36, 113),
(36, 114),
(36, 115),
(36, 130),
(37, 114),
(37, 115),
(37, 130),
(38, 114),
(38, 115),
(38, 130),
(39, 114),
(39, 115),
(39, 130),
(40, 114),
(40, 115),
(40, 130),
(41, 114),
(41, 115),
(41, 130),
(42, 115),
(42, 130),
(43, 115),
(43, 130),
(44, 115),
(44, 130),
(45, 115),
(45, 130),
(46, 115),
(46, 130),
(47, 116),
(47, 117),
(47, 118),
(47, 119),
(47, 120),
(47, 121),
(47, 122),
(47, 126),
(47, 128),
(47, 129),
(48, 118),
(48, 119),
(48, 120),
(48, 121),
(48, 122),
(48, 126),
(48, 128),
(48, 129),
(49, 118),
(49, 119),
(49, 120),
(49, 121),
(49, 122),
(49, 126),
(49, 128),
(49, 129),
(50, 118),
(50, 119),
(50, 120),
(50, 121),
(50, 122),
(50, 126),
(50, 128),
(50, 129),
(51, 118),
(51, 119),
(51, 120),
(51, 121),
(51, 122),
(51, 126),
(51, 128),
(51, 129),
(52, 119),
(52, 120),
(52, 121),
(52, 122),
(52, 126),
(52, 128),
(52, 129),
(53, 129),
(54, 129),
(55, 129),
(56, 129),
(57, 129),
(61, 130),
(62, 130),
(66, 131),
(70, 129);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`, `phone`, `image`) VALUES
(1, 'name@gmail.com', 'name2@gmail.com', '00000000000', 'weq', '0523555555', 'logo.png'),
(2, 'hamad', 'name@gmail.com', '000000000000aA', 'jaser', '0523555555', ''),
(3, 'jasem', 'name3@gmail.com', '00000000000000000000a000A', 'jasem', '0523555555', 'logo.png'),
(4, 'uname', 'ahmad@gmail.com', '0000000000Aa', 'store', '0542132138', 'logo.png'),
(5, 'soso1', 'Sara41@gmail.com', '000000000000aA', 'Sarah', '0536819398', ''),
(6, 'soso3', 'Sara412@gmail.com', '000000000000aA', 'Sarah', '09876554321', ''),
(7, 'soso4', 'Deemahmad4477@hotmail.com', '000000000000aA', 'Sarah', '09876554311', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbots`
--
ALTER TABLE `chatbots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`plant_id`,`image_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbots`
--
ALTER TABLE `chatbots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatbots`
--
ALTER TABLE `chatbots`
  ADD CONSTRAINT `chatbots_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD CONSTRAINT `recommendations_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `recommendations_ibfk_2` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
