SELECT * 
FROM etudiants 
WHERE YEAR(CURDATE()) - YEAR(naissance) > 18 
  OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND DATE_FORMAT(naissance, '%m-%d') <= DATE_FORMAT(CURDATE(), '%m-%d'));