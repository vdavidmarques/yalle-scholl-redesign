import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";
import { Link } from "react-router-dom";

const Courses = () => {
  const [courses, setCourses] = useState([]);
  useEffect(() => {
    apiService
      .getCoursesData()
      .then((response) => {
        setCourses(response.data);
      })
      .catch((error) => {
        console.log("Erro ao captar os dados do courses:", error);
      });
  }, []);
  return (
    <>
      {courses.length > 0 && (
        <section className="courses">
          <h2>Courses</h2>
          {courses.map((item, index) => (
            <article key={`courses-item-${index}`} className="courses-item">
              <Link to={`/courses/${item?.link}`}>
                {item?.acf?.postTypesThumb && (
                  <img
                    src={item?.acf?.postTypesThumb?.url}
                    alt={item?.title?.rendered}
                  />
                )}
                <h3>{item?.title?.rendered}</h3>
              </Link>
            </article>
          ))}
          <Link to="/courses" className="button">
            Ver todos os cursos
          </Link>
        </section>
      )}
    </>
  );
};

export default Courses;
