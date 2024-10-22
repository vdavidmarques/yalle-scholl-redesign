import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const Publications = () => {
  const [publications, setPublications] = useState([]);
  useEffect(() => {
    apiService
      .getPublicationsData()
      .then((response) => {
        setPublications(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  });

    return (
      <section className="publications">
      {publications?.length > 0 && publications.map((publication) => (
          <div key={publication.id}>
            {publication?.acf?.hasThumb && <img src={publication?.acf?.thumb} alt={publication.acf.alt} />}
            <h1>{publication?.title?.rendered} </h1>
            <div dangerouslySetInnerHTML={{ __html: publication?.acf?.['texts-courses'] }} />
        </div> 
      ))}
    </section>
    )   
}

export default Publications